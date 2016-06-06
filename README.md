[http://agile-ca.civicactions.com/](http://agile-ca.civicactions.com/)


# CHHS Foster Hub - The CivicActions Submission to CHHS RFI #75001 Agile Development Pre-Qualified (ADPQ)

Try out our prototype:

[http://agile-ca.civicactions.com/](http://agile-ca.civicactions.com/)

## How We Built the Prototype

We created a multi-disciplinary team and immediately decided to iterate through six sprints in the
SCRUM methodology. A Product Owner was assigned as the overall voice of the users. We immediately and
successfully made a connection with Foster Club, a group that put us in contact with real foster parents
and case workers, who generously assisted us each step as we moved from
user interviews to wireframes to a demoable prototype to a user-testable prototype.

Using Slack, we maintained a closely cooperative team that could react on a daily and hourly basis
as our understanding of user needs evolved through interaction with our actual users with guidance from our Agile Coach.

## The User-Centered Approach

We began with user interviews of one case worker and two foster parents. From these interviews
we built an empathy map [TODO: reference] and personae [TODO: referenmce]. We then began building
wirefames [TODO: refrence] that we could show to users to get feedback. In parallel to the creation of the wireframes
we deployed a website upon which we drove to a functional prototype so that our users could test our app on their actual
mobile devices.

The users taught us things not anticipated by the RFI. For example, visitation status and finding safe and convenient
places for visitation seems to be even more important than finding official Residential Facilities (from the state's data).
Nonetheless we implemented the map and made plans to provide a visitation negotiation system.

We were in fact surprised by the State's clarification that the primary user was the biological parent, not the foster parent,
but, following the Agile Manifesto, we immediately adjusted by beginning to ask your users to tell us what they believed biological parents
would want. Our prototype has roles for biological parents, foster parents, and case workers.

We designed our profile based on specific feedback about what is important to both biological parents and foster parents.
For example, we learned that a very important profile feature is "preferred time of contact"

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

a. Robert L. Read was assigned as Product Owner with overall responsibility.

b. Team consisted 7 persons in roles: Product Owner, Agile Coach, Technical Architect, Back End Web Designer, Front End Web Designer, and Interaction Designer/User
Researcher/Usability Tester, and Delivery Manger.  Engineers also doubled as DevOps engineers.

c. Interviewed 3 actual users, designed wireframes and empathy maps with them, demoed to them, and performed usability testing with one of them. 
d. Used:

1) User Interviews
2) Personae
3) Empathy Maps
4) Wireframes

e. We leveraged Bootstrap as an open-source style selected for this purpose with minimal extenstions.

f. An actual foster parent performed usability testing. We used ourselves as additional user testers.

g. Each of the the first 5 sprints involved user feedback that immediately influenced our design.

h. Using responsive open-source technology, we tested with both mobile phones and desktop environments.

i. Used at least five modern (see Note #2) and open-source technologies, regardless of
architectural layer (frontend, backend, etc.)

j. Deployed the prototype on an Infrastructure as a Service (Iaas) or Platform as Service (Paas)
provider, and indicated which provider they used.

k. Developed automated unit tests for their code

l. Setup or used a continuous integration system to automate the running of tests and
continuously deployed their code to their IaaS or PaaS provider.

m. Setup or used configuration management

n. Setup or used continuous monitoring

o. Deployed their software in a container (i.e., utilized operating-system-level virtualization)

p. Provided sufficient documentation to install and run their prototype on another machine

q. Prototype and underlying platforms used to create and run the prototype are openly licensed
and free of charge


a. Assigned one leader and gave that person authority and responsibility and held that person
accountable for the quality of the prototype submitted

b. Assembled a multidisciplinary and collaborative team that includes, at a minimum, five of the
labor categories as identified in Attachment C - ADPQ Vendor Pool Labor Category
Descriptions

c. Understood what people needed (see Note #1), by including people in the prototype
development and design process

d. Used at least three “human-centered design” techniques or tools

e. Created or used a design style guide and/or a pattern library

f. Performed usability tests with people

g. Used an iterative approach, where feedback informed subsequent work or versions of the
prototype

h. Created a prototype that works on multiple devices, and presents a responsive design

i. Used at least five modern (see Note #2) and open-source technologies, regardless of
architectural layer (frontend, backend, etc.)

j. Deployed the prototype on an Infrastructure as a Service (Iaas) or Platform as Service (Paas)
provider, and indicated which provider they used.

k. Developed automated unit tests for their code

l. Setup or used a continuous integration system to automate the running of tests and
continuously deployed their code to their IaaS or PaaS provider.

m. Setup or used configuration management

n. Setup or used continuous monitoring

o. Deployed their software in a container (i.e., utilized operating-system-level virtualization)

p. Provided sufficient documentation to install and run their prototype on another machine

q. Prototype and underlying platforms used to create and run the prototype are openly licensed
and free of charge

