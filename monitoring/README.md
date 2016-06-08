# CHHS Foster Hub Monitoring

This directory contains a http monitoring system based on the open source [uptime](https://github.com/fzaninotto/uptime) software. This system checks status and response time of the CHHS Foster Hub site every minute. It also produces summary/historical reports and charts, and will send e-mail alerts if an issue is detected.

This needs to be run on a server external to the main site, so that it can send alerts even if the main site server has an issue. The database, monitoring API, front-end and SMTP server all run on Docker, so any server that can run Docker and Docker Compose will suffice.

To start the monitoring system, SSH to your Docker host and run the following:

	git clone https://github.com/CivicActions/agile-california.git
	cd agile-california/monitoring
	./start-monitoring

This will start the Docker Compose cluster and then submit an initial Check configuration (see check.json) to the uptime API.

You can access the monitoring reports, adjust the check configuration and add additional checks by navigating to:
http://YOUR_DOCKER_HOST:8082

Alternatively you can explore CivicActions instance at http://ci.civicactions.net:8082/

In either case you will need to authenticate using the following credentials:
Username: monitoring
Password: demo