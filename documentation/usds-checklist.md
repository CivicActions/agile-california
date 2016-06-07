# USDS Playbook Checklist and Evaluation Form

<a name="abcd"></a>
## Play: 1
### Understand what people need

We must begin digital projects by exploring and pinpointing the needs of the people who will use the service, and the ways the service will fit into their lives. Whether the users are members of the public or government employees, policy makers must include real people in their design process from the beginning. The needs of people — not constraints of government structures or silos — should inform technical and design decisions. We need to continually test the products we build with real people to keep us honest about what is important.

#### checklist
1. Early in the project, spend time with current and prospective users of the service
2. Use a range of qualitative and quantitative research methods to determine people’s goals, needs, and behaviors; be thoughtful about the time spent
3. Test prototypes of solutions with real people, in the field if possible
4. Document the findings about user goals, needs, behaviors, and preferences
5. Share findings with the team and agency leadership
6. Create a prioritized list of tasks the user is trying to accomplish, also known as "user stories"
7. As the digital service is being built, regularly test it with potential users to ensure it meets people’s needs

#### Actions
1. On the second day of the project we performed [User Interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews)
of 4 foster parents and/or case workers, two of which we continued to use as testers and remained involved in all of our Sprint Demos.
2. We used interviews to gather user stories and to inform prioritization, as well as to provide feedback on designs, prototypes
and throughout development. We did no quantititative work in this short prototype,
but got feedback which influenced each of our six, two-day sprints.
3. Several of our users tested against our deployed site and gave
[valuable feedback](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/usability-testing) which turned into stories.
4. We kept extensive [documentation](https://github.com/CivicActions/agile-california/tree/master/documentation/ux) of
our user interactions and our conclusions. 
5. Results of our discussions with users, and determinations based on these discussions, are consistently shared
with the team in our repo, and in our Slack channel. Because our repo is completely open,
our findings may be useful to the California Health and Human Services Agency even if our firm is not selectld.
6. Our user stories and our backlog were kept is GitHub [Issues](https://github.com/CivicActions/agile-california/issues) managed via Waffle.
We managed this backlog every day as we made progress on stories and got more user feedback.
7. In addition to interviews, as soon as we had wirefames we invited actual users to our sprintly demos, where they
gave valuable feedback.  They also directly performed usability testing of our AWS deployed prototype.



#### key questions
1. Who are your primary users?
2. What user needs will this service address?
3. Why does the user want or need this service?
4. Which people will have the most difficulty with the service?
5. Which research methods were used?
6. What were the key findings?
7. How were the findings documented? Where can future team members access the documentation?
8. How often are you testing with real people?

#### answers to key questions

1. At the beginning of the project we thought it was Foster Parents, but the State answered our questions explaining it is Biological Parents,
as well as case workers with whom they must communicate.
2. Communication between parents and caseworkers is costly and cumbersome, and finding dropoff and visitation sites difficult.
3. The case worker wants to be able to handle a large case load, the parent wants to communicate more clearly to lear the status of their children.
4. We have not yet addressed the problem of people who don't use smart phones.
5. User interviews, personae, story maps, empathy maps.
* [User Interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews)
* [Personae](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/user-personas.md)
* [Empathy Map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/foster-parent-empathy-map.md)
* [Story Map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-story-map/user-story-map.md)
* [Wireframes](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/wireframes)
6. That parents want streamlined communication, and that changes to visitation status and arrange dropoff locations are big deal.
7. All of our work is publicly [documented]((https://github.com/CivicActions/agile-california/blob/master/documentation) including our all
of our ux finding.
8. During each sprint.

<a name="Play2"></a>
## Play 2
### Address the whole experience, from start to finish



We need to understand the different ways people will interact with our services, including the actions they take online, through a mobile application, on a phone, or in person. Every encounter — whether it's online or offline — should move the user closer towards their goal.

#### checklist
1. Understand the different points at which people will interact with the service – both online and in person
2. Identify pain points in the current way users interact with the service, and prioritize these according to user needs
3. Design the digital parts of the service so that they are integrated with the offline touch points people use to interact with the service
4. Develop metrics that will measure how well the service is meeting user needs at each step of the service

#### Actions
1. On a mobile device (phone or tablet) in a doctor's office, hospital, pharmacy, medical/nursing school, nursing home. Generally used when a patient is adding or altering the medications in his or her regime.
2. Different drugs are associated with different adverse events, at differing frequencies and there is not an easy tool to compare this relationship with multiple drugs.
3. Our intent is that information linking and promoting this tool could be posted in Dr's offices and medical facilities, in order grow public and professional awareness of the tool.
4. Metrics could include lower incidence of adverse events due to improved identification of the most likely drug in a patients regimen causing an adverse events; how often healthcare professionals access the site; how many different drug combinations are compared on the site;


#### key questions
- What are the different ways (both online and offline) that people currently accomplish the task the digital service is designed to help with?
- Where are user pain points in the current way people accomplish the task?
- Where does this specific project fit into the larger way people currently obtain the service being offered?
- What metrics will best indicate how well the service is working for its users?

#### answers to key questions

1. Looking up individual drugs online. Some doctors use WebMD, but don't admit it.
2. There is no way to get one comprehensive visual of all adverse events associated with a drug regime.
3. It can fit into the beginning of the prescription experience or when drugs are being added to an existing regime. Busy doctors, particularly in gerontology, have to manage complex drug regimenes quickly.
4. Usage will increase as trust in the information grows over time. We would like to create a "Would you recommend this to your colleagues" but we did not have time to measure that in this project.

<a name="Play3"></a>
## Play 3
### Make it simple and intuitive



Using a government service shouldn’t be stressful, confusing, or daunting. It’s our job to build services that are simple and intuitive enough that users succeed the first time, unaided.

#### checklist
1. Create or use an existing, simple, and flexible design style guide for the service
2. Use the design style guide consistently for related digital services
3. Give users clear information about where they are in each step of the process
4. Follow accessibility best practices to ensure all people can use the service
5. Provide users with a way to exit and return later to complete the process
6. Use language that is familiar to the user and easy to understand
7. Use language and design consistently throughout the service, including online and offline touch points

#### Actions
1. An expert created a simple, application specific [style guide](https://github.com/CivicActions/nebula/blob/master/GSA_AGILE_BPA_style_guide.png). We also used [Bootstrap](http://getbootstrap.com/) as a user interface baseline and grid framework.
2. This is a very simple application, but we are harmonizing the color palette.
3. This simple, one page application takes a list of drugs and displays the adverse events associated with each one. When a user adds a drug to the list the drug is displayed in the legend and its data appears in the graph, giving immediate visual feedback.
4. We prioritized accessibility stories and use colors that make the chart easier to read for users with visual impairments. For [reference](http://accessibility.psu.edu/images/charts/#charttext) and [here](http://guides.library.duke.edu/topten). We also completed a [detailed accessibility test](https://github.com/CivicActions/nebula/tree/master/accessibility).
5. We are offering a "save url" option so that users may return to the chart. It will save the list of drugs but no personal information.
6. The language will be kept to a minimum so the focus can remain on the charts. This app is geared towards health care professionals and we will ensure the copy makes sense to them. In subsequent revisions of the wireframes we've minimized or removed unnecessary text.
7. We are currently only an online service.

#### key questions
- What primary tasks are the user trying to accomplish?
- Is the language as plain and universal as possible?
- What languages is your service offered in?
- If a user needs help while using the service, how do they go about getting it?
- How does the service’s design visually relate to other government services?

#### answers to key questions

1. The user wants to understand the adverse event implications of complicated drug regimens for highly-prescribed patients (who sometimes have 5, 10, or 15 drugs.)
2. We have not worked much on "plain language", especially because our intended users are professional doctors. We would look out for language improvements during ongoing iterations and feedback cycles.
3. English only at present.
4. Since this is a prototype, we have provided no help facility. Whoever forks it may wish to do so.
5. We haven't attempted to harmonize with other government services, since this is a standalone application. We aimed for a modern, Bootstrap-style responsive design.

<a name="Play4"></a>
## Play 4
### Build the service using agile and iterative practices



We should use an incremental, fast-paced style of software development to reduce the risk of failure. We want to get working software into users’ hands as early as possible to give the design and development team opportunities to adjust based on user feedback about the service. A critical capability is being able to automatically test and deploy the service so that new features can be added often and be put into production easily.

#### checklist
1. Ship a functioning “minimum viable product” (MVP) that solves a core user need as soon as possible, no longer than three months from the beginning of the project, using a “beta” or “test” period if needed
2. Run usability tests frequently to see how well the service works and identify improvements that should be made
3. Ensure the individuals building the service communicate closely using techniques such as launch meetings, war rooms, daily standups, and team chat tools
4. Keep delivery teams small and focused; limit organizational layers that separate these teams from the business owners
5. Release features and improvements multiple times each month
6. Create a prioritized list of features and bugs, also known as the “feature backlog” and “bug backlog”
7. Use a source code version control system
8. Give the entire project team access to the issue tracker and version control system
9. Use code reviews to ensure quality

#### Actions
1. See url https://nebula.civicactions.com/ (subsequently moved to https://www.sideeffect.io/), rendered public on day 5 of our Sprint.
2. User interviews run via screenshare on days 1, 3, 4 of the Sprint, and live interaction with the url solicited on day 5, with feedback immediately collected from affiliate Tomorrow Partners and from members of the CivicActions team beyond the project team. See [process journal](https://github.com/CivicActions/nebula/edit/master/ProcessJournal.md).
3. Daily scrums, targeted sub-group meetings, chat (Slack), and Sprint rituals (retrospectives, Sprint planning meetings, backlog grooming meetings) have all constituted the central pillars of our team communication.
4. Our project team is exactly the size required by the roles specified in the RFQ in order to qualify for Pools 1, 2, 3, and has been entirely non-hierarchical, with directives derived in consultation with all concerned members of the project team.
5. Features are pushed to the live site multiple times each day, as evidenced by the log in Github and Slack.
6. Features prioritized on our Trello list "Prioritized Stories"; bugs prioritized in our issue queue in github.
8. Using Github for this - all project members and user-testers/stakeholders have access and the repository is also public.
8. Using Trello for this - all project members and user-testers/stakeholders have access. For this project, the board is also public. We used GitHub for some bugs.
9. We did team code and architecture design reviews of key components, and also used public pull requests in github to ensure expert-on-neophyte individual code reviews.

#### key questions
- How long did it take to ship the MVP? If it hasn't shipped yet, when will it?
- How long does it take for a production deployment?
- How many days or weeks are in each iteration/sprint?
- Which version control system is being used?
- How are bugs tracked and tickets issued? What tool is used?
- How is the feature backlog managed? What tool is used?
- How often do you review and reprioritize the feature and bug backlog?
- How do you collect user feedback during development? How is that feedback used to improve the service?
- At each stage of usability testing, which gaps were identified in addressing user needs?

#### answers to key questions

1. MVP shipped (made public) on day 5 of the Sprint. It was shown (in buggy prototype state) to users on Days 3 and 4.
2. Seven minutes.
3. Sprints have been 4 days each in this initial Sprint.
4. Git
5. Github issue queue
6. Trello, prioritized in the Sprint planning meeting.
7. Every 2 days.
8. User interviews, fed into backlog prioritization.
9. Early gap was inaccess to tool (access only through screenshare), later gaps were in poor UX, inaccess to relativized data.

<a name="Play5"></a>
## Play 5
### Structure budgets and contracts to support delivery



To improve our chances of success when contracting out development work, we need to work with experienced budgeting and contracting officers. In cases where we use third parties to help build a service, a well-defined contract can facilitate good development practices like conducting a research and prototyping phase, refining product requirements as the service is built, evaluating open source alternatives, ensuring frequent delivery milestones, and allowing the flexibility to purchase cloud computing resources.

[The TechFAR Handbook](https://playbook.cio.gov/techfar/) provides a detailed explanation of the flexibilities in the Federal Acquisition Regulation (FAR) that can help agencies implement this play.

#### checklist
1. Budget includes research, discovery, and prototyping activities
2. Contract is structured to request frequent deliverables, not multi-month milestones
3. Contract is structured to hold vendors accountable to deliverables
4. Contract gives the government delivery team enough flexibility to adjust feature prioritization and delivery schedule as the project evolves
5. Contract ensures open source solutions are evaluated when technology choices are made
6. Contract specifies that software and data generated by third parties remains under our control, and can be reused and released to the public as appropriate and in accordance with the law
7. Contract allows us to use tools, services, and hosting from vendors with a variety of pricing models, including fixed fees and variable models like “pay-for-what-you-use” services
8. Contract specifies a warranty period where defects uncovered by the public are addressed by the vendor at no additional cost to the government
9. Contract includes a transition of services period and transition-out plan

#### Actions
1. We managed an internal budget for this project.
2. N/A
3. N/A
4. N/A
5. N/A
6. N/A
7. N/A
8. N/A
9. N/A

#### key questions
- What is the scope of the project? What are the key deliverables?
- What are the milestones? How frequent are they?
- What are the performance metrics defined in the contract (e.g., response time, system uptime, time period to address priority issues)?

#### answers to key questions

1. See RFQ and related documents.
2. See RFQ and related documents.
3. See RFQ and related documents.

<a name="Play6"></a>
## Play 6
### Assign one leader and hold that person accountable



There must be a single product owner who has the authority and responsibility to assign tasks and work elements; make business, product, and technical decisions; and be accountable for the success or failure of the overall service. This product owner is ultimately responsible for how well the service meets needs of its users, which is how a service should be evaluated. The product owner is responsible for ensuring that features are built and managing the feature and bug backlogs.

#### checklist
1. A product owner was assigned.
2. All stakeholders agree that the product owner has the authority to assign tasks and make decisions about features and technical implementation details.
3. The product owner has a product management background with technical experience to assess alternatives and weigh tradeoffs.
4. The product owner has a work plan that includes budget estimates and identifies funding sources
5. The product owner has a strong relationship with the contracting officer


#### Actions
1. Product owner was identified on June 17 as Rob Read. Documented [here](https://github.com/CivicActions/nebula/blob/master/evidence/AppointmentOfProductOwner.md)
2. Stakeholders in this instance are agency management, and authority as outlined was granted to product owner on day 1 of Sprint.
3. See Read's [biography](https://civicactions.com/team/rob-read).
4. We early established a labor budget matrix of peoples skills against their availability.
5. Again, see [biography](https://civicactions.com/team/rob-read).



#### key questions
- Who is the product owner?
- What organizational changes have been made to ensure the product owner has sufficient authority over and support for the project?
- What does it take for the product owner to add or remove a feature from the service?

#### answers to key questions

1. A single product owner, Rob Read, was assigned.
2. Although CivicActions maintains a polite and professional environment, the Product Owner was empowered to make prioritizaion decisions and assign tasks.
3. The product owner required no additional authority, but based all decision on user feedback.


<a name="Play7"></a>
## Play 7
### Bring in experienced teams



We need talented people working in government who have experience creating modern digital services. This includes bringing in seasoned product managers, engineers, and designers. When outside help is needed, our teams should work with contracting officers who understand how to evaluate third-party technical competency so our teams can be paired with contractors who are good at both building and delivering effective digital services. The makeup and experience requirements of the team will vary depending on the scope of the project.

#### checklist
1. Member(s) of the team have experience building popular, high-traffic digital services
2. Member(s) of the team have experience designing mobile and web applications
3. Member(s) of the team have experience using automated testing frameworks
4. Member(s) of the team have experience with modern development and operations (DevOps) techniques like continuous integration and continuous deployment
5. Member(s) of the team have experience securing digital services
6. A Federal contracting officer is on the internal team if a third party will be used for development work
7. A Federal budget officer is on the internal team or is a partner
8. The appropriate privacy, civil liberties, and/or legal advisor for the department or agency is a partner

#### Actions
1. Yes -- though our "high-traffic" credentials might not be at a Google or Facebook level, we do have experience scaling complex, interactive digital services over hudreds of thousands of users.
2. Yes
3. Yes, we used an XUnit framework (PHPUnit), and have experience with several other technologies.
4. Yes, we had a run-test-after commit system using Jenkins, including a full "from scratch" scripted environment build.
5. Yes, we implemented a hardened FISMA ready Ubuntu host for this project, and have experience with OpenSCAP automated compliance scanning tools, among others.
6. N/A
7. N/A (though we had someone play this role)
8. We assigned the CEO to play the role of Privacy and Legal officer, and an experienced cybersecurity/compliance expert to play the role of Security officer.


<a name="Play8"></a>
## Play 8
### Choose a modern technology stack



The technology decisions we make need to enable development teams to work efficiently and enable services to scale easily and cost-effectively. Our choices for hosting infrastructure, databases, software frameworks, programming languages and the rest of the technology stack should seek to avoid vendor lock-in and match what successful modern consumer and enterprise software companies would choose today. In particular, digital services teams should consider using open source, cloud-based, and commodity solutions across the technology stack, because of their widespread adoption and support by successful consumer and enterprise technology companies in the private sector.

#### checklist
1. Choose software frameworks that are commonly used by private-sector companies creating similar services
2. Whenever possible, ensure that software can be deployed on a variety of commodity hardware types
3. Ensure that each project has clear, understandable instructions for setting up a local development environment, and that team members can be quickly added or removed from projects
4. [Consider open source software solutions](http://www.whitehouse.gov/sites/default/files/omb/assets/egov_docs/memotociostechnologyneutrality.pdf) at every layer of the stack

#### Actions
1. API driven frontend. Modern lightweight PHP MVC framework (Silex/Symphony). Bootstrap, jQuery.
2. We used Bootstrap in order to be Responsive, and tested with phones and iPad tablets using crossbrowsertesting.com and hands on device testing.
3. We have reproducible sandbox installation instructions with minimal dependencies (self hosting), and continuous integration of unit test framework.
4. The Docker host operating system (Ubuntu), Docker, container operating systems (minimal Debian), Nginx, PHP, MySQL and frontend frameworks are all open source licenced.



#### key questions
- What is your development stack and why did you choose it?
- Which databases are you using and why did you choose them?
- How long does it take for a new team member to start developing?


#### answers to key questions

1. Docker and Docker Compose for development, due to need for rapid developer onboarding, as well as for allowing full consistency with production environment. PHP on the backend chosen do to familiarity fo the team. API-centric for flexibility and reusability. JQuery and Bootstrap on the front end. We choose all of these components as light-weight and suited to a simple application that required not session or identity management.
2. We chose Mariadb version 10.0 as a popular and stable drop-in replacement of MySQL with strong support in the community.
3. We had no new development team members join mid-project in this short time, but our security officer tested our sandbox setup using the instructions and was ready to go in around 30 mins.

<a name="Play9"></a>
## Play 9
### Deploy in a flexible hosting environment



Our services should be deployed on flexible infrastructure, where resources can be provisioned in real-time to meet spikes traffic and user demand. Our digital services are crippled when we host them in data centers that market themselves as “cloud hosting” but require us to manage and maintain hardware directly. This outdated practice wastes time, weakens our disaster recovery plans, and results in significantly higher costs.

#### checklist
1. Resources are provisioned on demand
2. Resources scale based on real-time user demand
3. Resources are provisioned through an API
4. Resources are available in multiple regions
5. We only pay for resources we use
6. Static assets are served through a content delivery network
7. Application is hosted on commodity hardware

#### Actions
1. Fully automated deployment script provisions Amazon Web Services (AWS) infrastructure, and Cloudflare DNS/CDN. Docker based container architecture runs on AWS infrastructure could be horizontally scaled with minimal effort.
2. Deployments contain a full frontend or backend stack, so can be provisioned dynamically using AWS Cloudwatch rules.
3. Using AWS and Cloudflare APIs - there is no need for GUI configuration of these services, beyond getting an API key and connection details.
4. AWS region is configurable and instances are self contained (no master database needed).
5. AWS charges by the minute.
6. Cloudfront is used as a content delivery network.
7. AWS uses commodity hardware.


#### key questions
-	Where is your service hosted?
-	What hardware does your service use to run?
-	What is the demand or usage pattern for your service?
-	What happens to your service when it experiences a surge in traffic or load?
-	How much capacity is available in your hosting environment?
-	How long does it take you to provision a new resource, like an application server?
-	How have you designed your service to scale based on demand?
-	How are you paying for your hosting infrastructure (e.g., by the minute, hourly, daily, monthly, fixed)?
-	Is your service hosted in multiple regions, availability zones, or data centers?
-	In the event of a catastrophic disaster to a datacenter, how long will it take to have the service operational?
-	What would be the impact of a prolonged downtime window?
-	What data redundancy do you have built into the system, and what would be the impact of a catastrophic data loss?
-	How often do you need to contact a person from your hosting provider to get resources or to fix an issue?

#### answers to key questions

1. Amazon Web Services, US West (Oregon) data center, although this can be changed with a deployment parameter, and additional regions can be added with geographic DNS balancing.
2. t2.micro for both frontend and backend. See [Instance Types](http://aws.amazon.com/ec2/instance-types/) for more details. This is also configurable with a deployment parameter.
3. N/A - we do not yet have enough users to measure.
4. The CloudFlare CDN is robust enough to handle a substantial surge in traffic. Also, we can scale our docker containers if necessary.
5. With cloud computing we can scale up our capacity as much as we want.
6. Provisioning our server instances is automated and takes under 20 minutes for a full deployment (frontend and backend).
7. Using the docker-compose product we can easily scale any of our containers. (For example, the command `docker-compose scale web=2` would double our front end containers.)
8. Amazon pricing, which has some fixed and some usage rates.
9. We are using the West Coast AWS region data center. The CloudFlare CDN mirrors the site in many servers worldwide.
10. Assuming Github is online, we could be back online in a different region within 20 to 30 minutes.
11. Our app is not storing any critical data - all data is loaded automatically on build, or accessed dynamically.
12. We are storing no non-derivative data. There cannot be a catastrophic data loss.  A data loss would force us to repopulate the AHRQ data in our database in order to efficiently provide comparative prescription volume, this could be done by simply rerunning the deploy command.
13. We are using the AWS and CloudFlare APIs and web interfaces so we do not need to contact our provider for resources.


<a name="Play10"></a>
## Play 10
### Automate testing and deployments



Today, developers write automated scripts that can verify thousands of scenarios in minutes and then deploy updated code into production environments multiple times a day. They use automated performance tests which simulate surges in traffic to identify performance bottlenecks. While manual tests and quality assurance are still necessary, automated tests provide consistent and reliable protection against unintentional regressions, and make it possible for developers to confidently release frequent updates to the service.

#### checklist
1. Create automated tests that verify all user-facing functionality
2. Create unit and integration tests to verify modules and components
3. Run tests automatically as part of the build process
4. Perform deployments automatically with deployment scripts, continuous delivery services, or similar techniques
5. Conduct load and performance tests at regular intervals, including before public launch

#### Actions
1. We have automated front-end tests that run on every Github push, using Selenium Builder JSON format tests. These run a series of interactions and checks on the site in both Google Chrome and Mozilla Firefox browsers, and report any failures to developers.
2. We automated have back-end API integration tests using PHPUnit.
3. The build process runs on every git push, and includes automated tests.
4. We use automated deployment that can be initiated with a single slack command to automatically deploy both the backend and the frontend (as separate AWS instances).
5. We have continually tested. We have performed performance tests, which led to refactoring. We have not yet performed load tests.




#### key questions
- What percentage of the code base is covered by automated tests?
- How long does it take to build, test, and deploy a typical bug fix?
- How long does it take to build, test, and deploy a new feature into production?
- How frequently are builds created?
- What test tools are used?
- Which deployment automation or continuous integration tools are used?
- What is the estimated maximum number of concurrent users who will want to use the system?
- How many simultaneous users could the system handle, according to the most recent capacity test?
- How does the service perform when you exceed the expected target usage volume? Does it degrade gracefully or catastrophically?
- What is your scaling strategy when demand increases suddenly?

#### answers to key questions

1. Proably about 70% on the back end, 60% on the front end.
2. A very very minor fix can be coded, built, tested, and deployed in 10 minutes (3 minutes to test and 7 minutes for build and deployment time.)  Coding time is often longer, of course.
3. Our total process from conception to deployment can take as little as 3 hours.  Once fully coded, the build time is the same as for bugs.
4. The build/test process runs on every push - it ran 421 times during the course of this project. We also performed a complete deploy about 5 times a day during heavy development, although some days were slower.
5. PHPUnit test are the basis of the automated tests. We are using Jenkins as our central tool, which uses docker, docker-compose, and docker-machine to manage the containers.
6. We are using Jenkins as our central tool, which uses docker, docker-compose, and docker-machine to manage the containers, as well as report and chart test results.
7. We target medical professionals, so there may be as many as 2 million total uses (for doctors and their staff).  There use is not likely to be bursty, but will follow working hours as a pattern.  Since we do not require session management for this application, it is more reasonable to talk about requests per second than number of concurrent users. Ideally we can imagine 10 uses per day, or 20 million uses in a 12 hour period, or 1.7 million per hour, or 472 per second.
8. We haven't tested this.
9. We gracefully tolerate certain failures of the OpenFDA API, although we do not inform the user as well as we should in these cases.
10. If we ever reached high volume, we might have to start caching queries to the OpenFDA API itself.

<a name="Play11"></a>
## Play 11
### Manage security and privacy through reusable processes



Our digital services have to protect sensitive information and keep systems secure. This is typically a process of continuous review and improvement which should be built into the development and maintenance of the service. At the start of designing a new service or feature, the team lead should engage the appropriate privacy, security, and legal officer(s) to discuss the type of information collected, how it should be secured, how long it is kept, and how it may be used and shared. The sustained engagement of a privacy specialist helps ensure that personal data is properly managed. In addition, a key process to building a secure service is comprehensively testing and certifying the components in each layer of the technology stack for security vulnerabilities, and then to re-use these same pre-certified components for multiple services.

The following checklist provides a starting point, but teams should work closely with their privacy specialist and security engineer to meet the needs of the specific service.

#### checklist
1. Contact the appropriate privacy or legal officer of the department or agency to determine whether a System of Records Notice (SORN), Privacy Impact Assessment, or other review should be conducted
2. Determine, in consultation with a records officer, what data is collected and why, how it is used or shared, how it is stored and secured, and how long it is kept
3. Determine, in consultation with a privacy specialist, whether and how users are notified about how personal information is collected and used, including whether a privacy policy is needed and where it should appear, and how users will be notified in the event of a security breach
4. Consider whether the user should be able to access, delete, or remove their information from the service
5. “Pre-certify” the hosting infrastructure used for the project using FedRAMP
6. Use deployment scripts to ensure configuration of production environment remains consistent and controllable

#### Actions
1. CivicActions has determined in consultation with internal privacy experts the system does not collect any personal information.
2. CivicActions has determined in consultation with internal privacy experts the system does not collect any personal information.
3. CivicActions has determined in consultation with internal privacy experts the system does not collect any personal information.
4. CivicActions has determined in consultation with internal privacy experts the system does not collect any personal information and no PII is retained.
5. AWS infrastructure is FedRAMP certified.
6. CivicActions uses Ansible, Docker and other Infrastructure as Code tools to automate and control the configuration and deployment of development and production environments.


#### key questions
- Does the service collect personal information from the user?  How is the user notified of this collection?
- Does it collect more information than necessary? Could the data be used in ways an average user wouldn't expect?
- How does a user access, correct, delete, or remove personal information?
- Will any of the personal information stored in the system be shared with other services, people, or partners?
- How and how often is the service tested for security vulnerabilities?
- How can someone from the public report a security issue?

#### answers to key questions

1. The service is anonymous and does not collect personal information from the user.
2. The service does not collect more information than necessary to return the results of potential drug interactions.
3. N/A
4. N/A
5. CivicActions uses OpenSCAP and GovReady for automated, continous scanning of the system against the USGCB baselines and for known vultnerabilities.
6. Yes. The system will have a contact page with a variety of information including a privacy email address indicated for questions regarding HIPPA, privacy, and security matters.

<a name="Play12"></a>
## Play 12
### Use data to drive decisions



At every stage of a project, we should measure how well our service is working for our users. This includes measuring how well a system performs and how people are interacting with it in real-time. Our teams and agency leadership should carefully watch these metrics to find issues and identify which bug fixes and improvements should be prioritized. Along with monitoring tools, a feedback mechanism should be in place for people to report issues directly.

#### checklist
1. Monitor system-level resource utilization in real time
2. Monitor system performance in real-time (e.g. response time, latency, throughput, and error rates)
3. Ensure monitoring can measure median, 95th percentile, and 98th percentile performance
4. Create automated alerts based on this monitoring
5. Track concurrent users in real-time, and monitor user behaviors in the aggregate to determine how well the service meets user needs
6. Publish metrics internally
7. Publish metrics externally
8. Use an experimentation tool that supports multivariate testing in production

#### Actions
1. AWS Cloudwatch provides real-time resource monitoring of instances and resource utilization.
2. We monitored system availability, performance (response time, latency and error rates) as well as APIj correctness using the Runscope multi-location checking service. See (devops/monitoring)[https://github.com/CivicActions/nebula/tree/master/devops/monitoring] for details. AWS CloudWatch provides monitors for network throughput.
3. Runscope includes (median, 95th percentile, and 98th percentile performance)[https://github.com/CivicActions/nebula/blob/master/devops/monitoring/metrics.jpg]. Google Analytics also provides real user measurement (RUM) of end-user browser page load times.
4. Runscope was configured to provide automated e-mail and text alerts when failing checks occured.
5. (Google Analytics)[https://github.com/CivicActions/nebula/blob/master/evidence/google-analytics.jpg] was set up and tracks concurrent users in real time, as well as in aggregate.
6. There was not enough time or traffic to gather sufficient data to provide a useful report.
7. There was not enough time or traffic to gather sufficient data to provide a useful report.
8. Google Analytics provides this functionality, but there was not enough time or traffic to gather sufficient data to peform multivariate testing.


#### key questions
- What are the key metrics for the service?
- How have these metrics performed over the life of the service?
- Which system monitoring tools are in place?
- What is the targeted average response time for your service? What percent of requests take more than 1 second, 2 seconds, 4 seconds, and 8 seconds?
- What is the average response time and percentile breakdown (percent of requests taking more than 1s, 2s, 4s, and 8s) for the top 10 transactions?
- What is the volume of each of your service’s top 10 transactions? What is the percentage of transactions started vs. completed?
- What is your service’s monthly uptime target?
- What is your service’s monthly uptime percentage, including scheduled maintenance? Excluding scheduled maintenance?
- How does your team receive automated alerts when incidents occur?
- How does your team respond to incidents? What is your post-mortem process?
- Which tools are in place to measure user behavior?
- What tools or technologies are used for A/B testing?
- How do you measure customer satisfaction?

#### answers to key questions

1. User interactions (drugs entered, toggled), user shares, system response time and error rate.
2. There was not enough time or traffic to gather sufficient data to assess this.
3. AWS CloudWatch, Runscope, Jenkins.
4. For 99% of requests, page load requests should respond within 1 second, AHRQ API response should be within 2 seconds, and FDA API response within 4 seconds.
5. There was not enough time or traffic to gather sufficient data to assess this.
6. There was not enough time or traffic to gather sufficient data to assess this.
7. Given rapid prototype "beta" production, we would aim for 98% uptime for the initial launch, moving upwards as user base grows and platform stabilizes.
8. There was not enough time or traffic to gather sufficient data to assess this.
9. Email and text.
10. We coordinate this on Slack, assigning an owner for each incident, working closely on triage and remediation. All incidents are considered using a root cause analysis, and discussed with the entire development and operations team based on those findings to improve process and tools as needed.
11. We are using Google Analytics on the site so that we can gain better insight into usage and behavior. We are also planning on basic usability testing using a remote testing tool after the release of the MVP.
12. Our MVP is rapidly evolving and we are not ready for A/B testing at this time.
13. We have interviewed users consistently throughout our development process in order to garner their feedback on the product. And we have included a way for users to submit suggestions, issues and ideas from the site. Future plans include surveys.


<a name="Play13"></a>
## Play 13
### Default to open


When we collaborate in the open and publish our data publicly, we can improve Government together. By building services more openly and publishing open data, we simplify the public’s access to government services and information, allow the public to contribute easily, and enable reuse by entrepreneurs, nonprofits, other agencies, and the public.

#### checklist
1. Offer users a mechanism to report bugs and issues, and be responsive to these reports
2. Provide datasets to the public, in their entirety, through bulk downloads and APIs (application programming interfaces)
3. Ensure that data from the service is explicitly in the public domain, and that rights are waived globally via an international public domain dedication, such as the “Creative Commons Zero” waiver
4. Catalog data in the agency’s enterprise data inventory and add any public datasets to the agency’s public data listing
5. Ensure that we maintain the rights to all data developed by third parties in a manner that is releasable and reusable at no cost to the public
6. Ensure that we maintain contractual rights to all custom software developed by third parties in a manner that is publishable and reusable at no cost
7. When appropriate, create an API for third parties and internal users to interact with the service directly
8. When appropriate, publish source code of projects or components online
9. When appropriate, share your development process and progress publicly

#### Actions
1. We have an open repository which allows issues to be created, and recently implemented an in-product survey.
2. We offer a documented API that makes it easy to combine the AHRQ and OpenFDA data.  It is public, and others can implement it.
3. We generate no new data, but pass the OpenFDA and AHRQ data through.
4. NA
5. NA --- the government can do this, but we do not.  We have place our code in the public domain.  If we paid for any sub-contracting, we would of course do this.
6. NA --- we have chosen to publish as the government does, in the public domain.  A GPL or other share-alike system would allow us to do this. We hope the government demands such licensing where legally entitled to in the future.
7. We have done this, https://api.sideeffect.io
8. Obviously we have done this as required by the RFQ and our principles. https://github.com/CivicActions/nebula
9. We did do this, and in fact we reported on by [Federal Computer Weekly](http://fcw.com/articles/2015/07/06/civicactions-agile.aspx?m=1).

#### key questions
- How are you collecting user feedback for bugs and issues?
- If there is an API, what capabilities does it provide? Who uses it? How is it documented?
- If the codebase has not been released under an open source license, explain why.
- What components are made available to the public as open source?
- What datasets are made available to the public?

#### answers to key questions

1. Of course at first we did direct interviews, then as the MVP matured, direct, observed user testing. We have an open github repository.  However, since that is mostly friendly to techies, we also placed a survey directly in the product.
2. It is code-level documented, and provides a reasonalbe RESTful explanation if you just go to it.  It repackages the OpenFDA data and can combine it with prescription volume data from AHRQ to add value by contextualizing the data.
3. It is open source.
4. All.
5. None in addition to what we are repackaging.


