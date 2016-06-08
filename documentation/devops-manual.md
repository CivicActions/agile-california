# CHHS Foster Hub

## Licence

For licence details, including licences of third-party free and open source software incorporated into this repository please see the LICENSE.md file.

## Development environment setup

The development environment is fully self-contained, and is based on Docker and Docker Compose.

### Requirements
1. [Docker](https://www.docker.com/) to manage containers.
1. [Docker Compose](https://docs.docker.com/compose/) to automate defining and running multi-container applications with Docker.

### Instructions

Clone the repository, and change to the project directory:
```bash
git clone https://github.com/CivicActions/agile-california.git
cd agile-california
```

If you are using Docker on Windows or OS X:
* Make sure it is started up and it's shell environment variables are available before continuing (if using the Docker installer you can do this by starting a Docker Quickstart Terminal window).
* You will also need to add a route to the Docker subnet by running `sudo route -n add 172.0.0.0/8 192.168.10.10`.

To start docker containers, initiate database schemas and install:
```bash
. bin/activate
build
initial-install
```
The first run will take a while. Use the build command to restart containers if you reboot your workstation.

* The build command will output the URL for the "web" container - access this URL to access your sandbox site.
* To view logs run `docker-compose logs`.
* To stop the containers run `docker-compose stop`.

## Testing

To execute all the integration tests, build your environment as normal, then run:
```bash
run-tests
```
The tests will indicate successes/failures on the screen. For integration into automation tools (e.g. Jenkins) a zero exit code (`echo $?`) indicates a successful run, a non-zero result indicates a test failure.

The tests run 2 suites (mobile and desktop viewports), first on Google Chrome and then on Mozilla Firefox. All testing infrastructure and the test browsers run inside Docker containers, so no additional local setup is needed.

### Test Development

The tests use the open source [Selenium Builder](https://github.com/SeleniumBuilder/se-builder) Selenium 2 JSON test format, which is easy to version control and edit with the open source Selenium Builder Firefox extension (which can run/debug the tests manually). The tests are in the [tests](https://github.com/CivicActions/agile-california/tree/master/tests) directory.

To run/build tests with the Firefox extension you will need to:

* Load the appropriate suite (desktop.json or mobile.json).
* Edit the tests/base-url.json file and set the address for your local web server (from the `build` command output).
* Save the specific test files when you are done working on the tests.
* If you are working on tests that alter data you may also need to run `create-demo-users` between runs (as the `run-tests` script does). This will ensure a clean test environment.

Tests are automated using the (se-interpreter)[https://github.com/Zarkonnen/se-interpreter] which is made available as a Docker container, together with the (SeleniumHQ Chrome and Firefox Docker images)[https://github.com/SeleniumHQ/docker-selenium].

Test results are recorded in chrome.log and firefox.log files in the "tests" directory.

### Unit Tests

Drupal 8 and contributed modules and vendor libraries also contain a large number of tests. If this code is changed those tests should also be run to ensure there are no regressions. These tests can be run using:
```bash
drush en simpletest
enter php docroot/core/scripts/run-tests.sh --url http://web/ --all
```

## Deployment

This deploys an instance of the frontend and an instance of the backend on Amazon Web Services instances, then configures DNS (with CDN and SSl) for each IP using Cloudflare. Docker Machine is used to provision and bootstrap the instances. The AWS CLI is used to manage network configuration and a Cloudflare CLI is used to configure Cloudflare (the AWS CLI and Cloudflare tools are run via Docker, so dependencies are minimized).

### Requirements
1. [Docker](https://www.docker.com/) to manage containers.
1. [Docker Compose](https://docs.docker.com/compose/) to automate defining and running multi-container applications with Docker.
1. [Docker Machine](https://docs.docker.com/machine/) to automate creating Docker hosts locally, on cloud providers, or in a data center.
1. Amazon Web Services account and API keys to automate interactions with AWS.
	* VPC configured (default OK)
	* Subnet within VPC
1. CloudFlare account and API keys to automate interactions with CloudFlare.

### Instructions

Clone the repository, and change to the project directory:
```bash
git clone https://github.com/CivicActions/agile-california.git
cd agile-california
```

If you are using Docker on Windows or OS X:
* Make sure it is started up and it's shell environment variables are available before continuing (if using the Docker installer you can do this by starting a Docker Quickstart Terminal window).
* You will also need to add a route to the Docker subnet by running `sudo route -n add 172.0.0.0/8 192.168.10.10`.

Create the following required environment variables, containing your AWS and Cloudflare access details:
```bash
export AWS_ACCESS_KEY_ID=
export AWS_SECRET_ACCESS_KEY=
export AWS_VPC_ID=
export AWS_DEFAULT_REGION=
export CLOUDFLARE_EMAIL=
export CLOUDFLARE_TOKEN=
```

For **continuous monitoring**, set to below environmental variables to use [18F's hardened, FISMA-Ready Ubuntu-LTS](https://github.com/fisma-ready/ubuntu-lts) for Docker Host instead of Docker's default Ubuntu-LTS. You can rebuild this AMI using the instructions on that project README.
```bash
export AWS_DEFAULT_REGION="us-west-2"
export AWS_AMI=ami-b7393887
export AWS_ROOT_SIZE=30
```

Subnets must be available with in the AWS Region and Zone you are using. Ensure that your VPC is contained within the Region you select, and that the zone/subnet (if selected) are available on that VPC. The AWS environment variables and default values are detailed in the [Docker Machine](https://docs.docker.com/machine/#amazon-web-services) documentation. If using the non-default region and subnet you can specify these by setting the following environment variables:
```bash
export AWS_ZONE=
export AWS_SUBNET_ID=
```

Run the ./bin/deploy script to initiate the deploy, where the first parameter is the subdomain to deploy to, and the second is a Cloudflare DNS hosted domain name. For example:
```bash
./bin/deploy agile-ca civicactions.com
```

This will deploy a candidate instance to https://agile-ca.civicactions.com/ and run tests on this instance.

If all tests pass then:

1. Instances tagged (in EC2) as old will be terminated.
1. The currently active instance will be tagged as old and retained in case of fallback needs.
1. The candidate instance will be tagged as active.
1. DNS on Cloudflare will be switched from to the new instance IP.
1. The Cloudflare cache will be cleared.

If tests fail then the instance will be tagged as "failed" and kept online for diagnostics (remove manually when diagnostics are complete).

## Continuous Delivery - Automating Testing and Deployment

A sample Jenkins configuration is available in the [tests/automation](https://github.com/CivicActions/agile-california/tree/master/tests/automation/) directory. This will, when triggered (e.g. by a Slack command, Github push or tag push):

1. Report to Slack that a deploy has started.
1. Deploy a candidate instance using the deploy script above.
1. Run the tests and record the results.
1. Report the result to a Slack channel.
1. If tests pass, rotate the candidate instance into the active and switch the DNS using the process described above.

## Monitoring

There is a monitoring system that you can install on a Docker host external to the deployed host. See [instructions](https://github.com/CivicActions/agile-california/tree/master/monitoring) for details.
