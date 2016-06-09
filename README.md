Try our prototype:

[http://agile-ca.civicactions.com/](http://agile-ca.civicactions.com/)

Watch a screencast of the user experience here: 

[https://youtu.be/A76b5W14Nvo] (https://youtu.be/A76b5W14Nvo)

# CHHS Foster Hub - The CivicActions Submission to CHHS RFI #75001 Agile Development Pre-Qualified (ADPQ) Vendor Pool

## How We Built the Prototype

We created a multi-disciplinary team and immediately decided to iterate through [six sprints](https://github.com/CivicActions/agile-california/blob/master/documentation/journal.md) in the
scrum methodology, carefully compressed from the normal two-week cycle down to a ligtning-fast two days per sprint.
A Product Owner was assigned as the overall voice of the users. We successfully made a connection with [Foster Club](https://www.fosterclub.com/groups/california), a group that put us in contact with real foster parents and case workers, who generously assisted us each step of our iterative developent.

Using Slack, we maintained a closely cooperative team that could react on a daily and hourly basis, as our understanding of user needs evolved through interaction with our actual users, and as guided by our Agile Coach.
We maintained a disciplined process, holding [formal demos](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-interviews/log-of-sprint-demos.md) and [retrospectives](https://github.com/CivicActions/agile-california/tree/master/call-notes)
with each sprint, and a complete story board manipulated with [Waffle](https://github.com/CivicActions/agile-california/tree/master/call-notes/waffle-shots)
overlaying our [GitHub](https://github.com/CivicActions/agile-california) Issues and Stories.

As we have done before, we [closely followed the USDS checklist](https://github.com/CivicActions/agile-california/blob/master/documentation/usds-checklist.md).

## The User-Centered Approach

Knowing very little about the subject of foster children but having found real users, we wrote open-ended [scripts](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews/Scripts).
We began our four [user interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews) of one case worker and three foster parents. From these interviews we built an [empathy map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/foster-parent-empathy-map.md) and [personae](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/user-personas.md).
We then organized an informal design studio and began mocking up [sketches and wirefames](https://github.com/CivicActions/agile-california/blob/master/documentation/images/Sketch-inbox01.png) that we could show to users to get feedback.
In parallel to the creation of the wireframes we deployed a website upon which we drove to a functional prototype so that our users could test our app on their actual
mobile devices.

We demonstrated wireframes to users in [Sprint 3](https://github.com/CivicActions/agile-california/blob/master/documentation/journal.md#sprint-3).

The users taught us things not anticipated by the RFI. For example, visitation status changes and finding safe and convenient places for dropoff seems to be even more important than finding official Residential Facilities (from the state's data).
Nonetheless we implemented the map of official residential facilities and made future plans to provide a visitation negotiation system.
We created a "spike" [solution](https://github.com/CivicActions/agile-california/tree/master/geojson-spike) to test our ability to render a map before integrating it into our main code.

As our understanding grew we kept our [story map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-story-map/user-story-map.md) up to date.

We designed our profile based on specific feedback about what is important to both biological parents and foster parents.
For example, we learned that a very important profile feature is "preferred time of contact", so we added that to our profiles of parents and case workers. Our users told us it was better to leave this an informal text message than to use a time-based field.

We learned that marking inbox messages "urgent" was very important, so we render urgent messages in red, and that seeing read/unread status of messages helped clarify the status of caseworker communication, so we implemented this as well. 
We also learned that classifying messages as being related to visitation or medical incidents is extremely important, so we wrote user stories to capture that and placed them into our constantly-evolving [backlog](https://github.com/CivicActions/agile-california/issues), but were not able to complete them.

We got a *big surprise* when the State clarified that the primary user was the biological parent, not the foster parent! So, following the [Agile Manifesto](http://www.agilemanifesto.org/), we immediately embraced change by asking our users to tell us what they believed biological parents
would want (visitation arrangement, contact info). Our prototype now has roles for biological parents, foster parents, and case workers.

At present, our prototype displays messages site-wide to all logged-in demo users. Our intent for the tool, again informed by user research, is that it would become a platform where users would log in, select whichever parent or caseworker associated with their account they wish to communicate with, and send and receive messages directly, privately, with that person. 

On June 1st our CEO [reached out](https://civicactions.com/blog/an-open-invitation-to-collaborate/) to other firms seeking to be part of the RFI by inviting them to work with us,
reuse our work-in-progress software, and even to share in our most valuable resource, our access to actual foster parents.
This reiterates our "fiercely open" way of doing business.

By [Sprint 5](https://github.com/CivicActions/agile-california/blob/master/documentation/journal.md#sprint-5) we had a functional prototype demoed to both a foster parent and a case worker.
A foster parent provided user testing of our deployed prototype and [extensive feedback](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/usability-testing/2016-6-03-notes-from-foster-parent-usabiliy-tester.md) during Sprint 6.

In sum, our team spent over four hours discussing this product with potential users, both in our [initial interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews) and in our [sprint demos](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-interviews/log-of-sprint-demos.md).

## The Technology

Building on experience, we began in the very first Sprint to implement a automatic deployment system with fully automated testing and fully automated deployment of the candidate build. This used "infrastructure as code" instantiating a new server instance for each deploy, then using Docker and Bowline to orchestrate containers. We have a Slack command that anyone
can use to initiate a Jenkins build.

The actual technology is a backbone of Drupal 8 styled with Bootstrap, although a user is unlikely to be aware of that, since we significantly simplified the user interface, and installed it in such a way that it appears to be an iOS or Android app. In actuality it is a mobile-friendly website.

The facilities information is presented on an integrated mobile-friendly map using GeoJSON, MapBox, Leaflet, an open-source mapping system, together with an interactive, responsive table using the Datables library. The API provided by the state is accessed via jQuery.

# Following the USDS Playbook

We follow the USDS Playbook closely.  As documentation of this, we us the explicit checklist published by the USDS with specific evidence and answers for each relevant checklist item:

[USDS checklist](https://github.com/CivicActions/agile-california/blob/master/documentation/usds-checklist.md)

# The Explicit RFI Requirements

The RFI calls out items (a-q) below as requiring explicit reference. We have not duplicated the headings, but only our evidence for having completed each of the required items.

a. A Product Owner was given overall responsibility (Robert L. Read).

b. Our team consisted of seven persons in the following roles: Product Owner, Agile Coach, Technical Architect, Back End Web Designer, Front End Web Designer, Interaction Designer/User
Researcher/Usability Tester, and Delivery Manager.  Engineers also doubled as DevOps engineers. More information about the roles we designated, and the personnel we assigned to these roles, can be found in our [project roles](https://github.com/CivicActions/agile-california/blob/master/documentation/project-roles.md) file. 

c. We interviewed four actual users, designed wireframes and empathy maps with them, demoed to them, and performed usability testing with one of them.

d. We used the following Human Centered Design techniques:

1. [User Interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews)
2. [Personae](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/user-personas.md)
3. [Empathy Map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/foster-parent-empathy-map.md)
4. [Story Map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-story-map/user-story-map.md)
5. [Design Studio](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/wireframes)
6. [Wireframes](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/wireframes)

e. We leveraged Bootstrap as an open-source style and made a few header and footer design choices. We outlined our [reasoning for this choice here](https://github.com/CivicActions/agile-california/blob/master/documentation/style-guide.md). We chose to include the CHHS logo and favicon so that the prototype would include branding as established by the California Health and Human Services organization.

f. A foster parent test user performed usability testing. We used ourselves as additional user testers.

g. Each of the the first 5 sprints involved user feedback that immediately influenced our design. Further, our own [Retrospectives](https://github.com/CivicActions/agile-california/tree/master/call-notes) captured our learnings from each sprint and our plans to modify future sprints in light of these learnings. 

h. Using fully responsive open-source technology, we tested with both mobile phones and desktop environments.

i. We used the following core technologies:

1. [Drupal 8](https://www.drupal.org/8)
2. [MapBox](https://www.mapbox.com/)
3. [Bootstrap](http://getbootstrap.com/)

Additionally we used [Ubuntu](http://www.ubuntu.com) (as the Docker Machine host operating system), [Docker](https://www.docker.com/products/docker-engine), [Docker Compose](https://www.docker.com/products/docker-compose), container operating systems (minimal [Debian](https://www.debian.org/)), [Apache httpd](https://httpd.apache.org/), [MariaDB](https://mariadb.org/), monitoring ([uptime](https://github.com/fzaninotto/uptime)), testing ([Selenium Builder](https://github.com/SeleniumBuilder/se-builder), [se-interpreter](https://github.com/Zarkonnen/se-interpreter)), deployment tools ([Docker Machine](https://www.docker.com/products/docker-machine), [AWS CLI](https://github.com/aws/aws-cli), [CloudFlare CLI](https://github.com/danielpigott/cloudflare-cli)), automation ([Jenkins](https://jenkins.io/), [Bowline](https://github.com/davenuman/bowline)), [PHP](https://secure.php.net/), PHP libraries ([Symfony](https://symfony.com/)) and frontend frameworks ([Bootstrap](https://getbootstrap.com/), [jQuery](https://jquery.com/), [Mapbox](https://www.mapbox.com/), [Datatables](https://datatables.net/)).

j. We deployed the prototype to Amazon Web Services (AWS), a FedRAMP compliant IaaS provider. Additionally, CloudFlare was used for CDN, SSL and DNS automation.

k. End-to-end tests for mobile and desktop viewports were developed using the open-source [Selenium Builder](https://github.com/SeleniumBuilder/se-builder) testing framework. Tests were run in fully managed Docker based [Google Chrome](https://hub.docker.com/r/selenium/standalone-chrome/) and [Mozilla Firefox](https://hub.docker.com/r/selenium/standalone-firefox/) Selenium driven browsers, to test our profile and mapping functionality.

l. We used Jenkins to run the automated tests on each candidate deploy and notify us immediately on Slack if tests passed of failed. Tests were automated using the [se-interpreter](https://github.com/Zarkonnen/se-interpreter) runner and run in Firefox and Chrome browsers.

m. We used an Infrastructure as Code (IaC) methodology to manage all infrastructure and configuration. Upon triggering a deploy with a Slack command, Jenkins runs a [deploy script](https://github.com/CivicActions/agile-california/blob/master/bin/deploy) that creates a new "candidate" AWS EC2 server instance with Docker Machine, brings up Docker containers to host the site, installs the site software, runs the test suite and (if the tests pass) switches DNS to make the candidate live. The immediate prior live container is retained online in case it is needed for fail back. This entire process happens with no manual interaction and encapsulates all the configuration (deploy script, Docker Compose configuration and site configuration) in the project Git repository.

n. We set up continuous monitoring of application status and response time using open source [uptime](https://github.com/fzaninotto/uptime) software. This produces summary/historical reports and charts, and will send e-mail alerts if an issue is detected.

o. We use [Docker](https://www.docker.com/) together with [Docker Machine](https://docs.docker.com/machine/overview/) for Docker host management and [Docker Compose](https://docs.docker.com/compose/overview/) for container orchestration and configuration management.

p. The [devops-manual](https://github.com/CivicActions/agile-california/blob/master/documentation/devops-manual.md) describes how to install and run the prototype on a local sandbox, deploy the application to AWS and configure a continuous delivery (integrated testing and deployment) automation job.

q. Our entire software stack is open source and provided free of charge. All licenses are documented in associated [LICENSE.md](https://github.com/CivicActions/agile-california/blob/master/LICENSE.md).



