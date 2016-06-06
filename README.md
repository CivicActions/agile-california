Try our prototype:

[http://agile-ca.civicactions.com/](http://agile-ca.civicactions.com/)

Watch a screencast of the user experience here:
[TO BE DONE]

# CHHS Foster Hub - The CivicActions Submission to CHHS RFI #75001 Agile Development Pre-Qualified (ADPQ)

## How We Built the Prototype

We created a multi-disciplinary team and immediately decided to iterate through
[six sprints](https://github.com/CivicActions/agile-california/blob/master/documentation/journal.md) in the
SCRUM methodology. A Product Owner was assigned as the overall voice of the users. We 
successfully made a connection with [Foster Club](https://www.fosterclub.com/groups/california),
a group that put us in contact with real foster parents
and case workers, who generously assisted us each step of our iterative developent.

Using Slack, we maintained a closely cooperative team that could react on a daily and hourly basis
as our understanding of user needs evolved through interaction with our actual users with guidance from our Agile Coach.
We mainatained a disciplined process, having formal demos, retrospectives, and fully prioritized backlog of user stories.
We carefully compressed a normal Sprint of two weeks down into two days so that we could iterate powerfully in limited time.

## The User-Centered Approach

Knowing very little about the subject of foster children but having found real users, we wrote
open-ended [scripts](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews/Scripts).
We began our four [user interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews)
of one case worker and three foster parents. From these interviews
we built an empathy map [TODO: reference] and personae [TODO: referenmce]. We then began building
[wirefames](https://github.com/CivicActions/agile-california/blob/master/Sketch-inbox01.png) that we could show to users to get feedback. In parallel to the creation of the wireframes
we deployed a website upon which we drove to a functional prototype so that our users could test our app on their actual
mobile devices. 

We demoed wireframes in Sprint 3.

The users taught us things not anticipated by the RFI. For example, visitation status changes and finding safe and convenient
places for dropoff seems to be even more important than finding official Residential Facilities (from the state's data).
Using this fact, we created a "spike" [solution](https://github.com/CivicActions/agile-california/tree/master/geojson-spike)
to test our ability to render a map.
Nonetheless we implemented the map and made plans to provide a visitation negotiation system.

As our understanding grew we kept our
[story map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-story-map/user-story-map.md) up to date.

We designed our profile based on specific feedback about what is important to both biological parents and foster parents.
For example, we learned that a very important profile feature is "preferred time of contact", so we added that to our profiles
of parents and case workers. Our users told us it was better to leave this an informal text message than to use a time-based field.

We learned that marking messages in the inbox of urgent was very important, so we supported that and render urgent messages in red.
We also learned that classifying messages as being related to visitation or medical incidents is extremely important, so we write user stories
to capture that and placed them into our constantly-evolving [backlog](https://github.com/CivicActions/agile-california/issues), but were not able to complete them.

We got a big surprise when the State clarified that the primary user was the biological parent,
not the foster parent!
Following the [Agile Manifesto](http://www.agilemanifesto.org/), we immediately embraced change
by beginning to ask your users to tell us what they believed biological parents
would want. Our prototype now has roles for biological parents, foster parents, and case workers.

By Sprint 5 had a functional prototype demoed to both a foster parent and a case worker.
A foster parent provided user testing of our deployed prototype and
[extensive feedback](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/usability-testing/2016-6-03-notes-from-foster-parent-usabiliy-tester.md) during Sprint 6.

## The Technology

Building on experience, we began in the first Sprint to implement a automatic deployment and continuous
integraton system with an automated testing system.  This used Docker and Bowline for the deployment to
a virtualized server.  Jenkins was used for our automated tests.  We have a Slack command that anyone
can use to initiate a build.

The actual technology is a backbone of Drupal 8 styled with Bootstrap, although a user is unlikely to be aware of that, since we significantly
simplified the user interface, and install it in such a way that it appears to be an iOS or Android app.
In actuality it is a mobile-friendly website.

The facilities information is presented on an integrated mobile-friendly map using GeoJSON, MapBox, and a javascript rendering
technology such as Leaflet distributed with MapBox, an open-source mapping system. The API provided by the state is accessed via
jquery.

## The Explicit RFI Requirements

a. A Product Owner was given overall responsibility (Robert L. Read).

b. Team consisted 7 persons in roles: Product Owner, Agile Coach, Technical Architect, Back End Web Designer, Front End Web Designer, and Interaction Designer/User
Researcher/Usability Tester, and Delivery Manger.  Engineers also doubled as DevOps engineers.

c. Interviewed 4 actual users, designed wireframes and empathy maps with them, demoed to them, and performed usability testing with one of them. 
d. Used:

1. [User Interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews)
2. [Personae](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/user-personas.md)
3. [Empathy Map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/foster-parent-empathy-map.md)
4. [Story Map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-story-map/user-story-map.md)
4. [Wireframes](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/wireframes)

e. We leveraged Bootstrap as an open-source style and made a few header and footer design choices. 

f. An actual foster parent performed usability testing. We used ourselves as additional user testers.

g. Each of the the first 5 sprints involved user feedback that immediately influenced our design.

h. Using responsive open-source technology, we tested with both mobile phones and desktop environments.

i. We used technologies:

1. [GeoJSON](http://geojson.org/)
2. [MapBox](https://www.mapbox.com/)
3. [BootStrap](http://getbootstrap.com/)
4. [Jenkins](https://jenkins.io/)
5. [Docker](https://www.docker.com/)
6. [Drupal 8](https://www.drupal.org/8)
7. [Jquery](https://jquery.com/)


j. Deployed the prototype on an Infrastructure as a Service (Iaas) or Platform as Service (Paas)
Provider, and indicated which provider they used. [TODO: Own, can you comment on this?]

k. [TODO: Owen, can you comment on our automated unit tests?]

l. We use Jenkins to run the automated tests after each deploy.

m. Setup or used configuration management [TODO: what do we put here.]

n. We did not set up continous monitoring. [TODO: Owen to create]

o. We use Docker.

p. We have a [guide to deployment](https://github.com/CivicActions/agile-california/blob/master/docker-readme.md). [TODO: Owen, can you confirm this sufficient?]

q. Our entire software stack is open source.



