# USDS Playbook Checklist and Evaluation Form for CHHS Foster Hub Prototype

<a name="Play1"></a>
## Play: 1
### Understand what people need

We must begin digital projects by exploring and pinpointing the needs of the people who will use the service, and the ways the service will fit into their lives. Whether the users are members of the public or government employees, policy makers must include real people in their design process from the beginning. The needs of people — not constraints of government structures or silos — should inform technical and design decisions. We need to continually test the products we build with real people to keep us honest about what is important.

#### Checklist
1. Early in the project, spend time with current and prospective users of the service
2. Use a range of qualitative and quantitative research methods to determine people’s goals, needs, and behaviors; be thoughtful about the time spent
3. Test prototypes of solutions with real people, in the field if possible
4. Document the findings about user goals, needs, behaviors, and preferences
5. Share findings with the team and agency leadership
6. Create a prioritized list of tasks the user is trying to accomplish, also known as "user stories"
7. As the digital service is being built, regularly test it with potential users to ensure it meets people’s needs

#### Actions
1. On the second day of the project we performed [User Interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews)
with four foster parents and/or case workers, two of which we continued to engage as reviewers/testers. These two individuals were invited to all of our Sprint Demos.
2. We conducted interviews to gather user stories and to inform prioritization, and we engaged users in additional demos and discussions to gather feedback on designs and prototypes. We did no quantitative work in this short project, but the qualitative feedback we collected influenced each of our six, two-day sprints.
3. Several of our users usability tested our deployed site and gave [valuable feedback](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/usability-testing) which became stories and informed prioritization of subsequent work.
4. We kept extensive [documentation](https://github.com/CivicActions/agile-california/tree/master/documentation/ux) of our user interactions and our conclusions. 
5. Results of our discussions with users, and determinations based on these discussions, were consistently shared with the team in our Git repository and our Slack channel. Our repository is completely open and our findings may be useful to the California Health and Human Services Agency leadership even if our company is not selected.
6. Our user stories and our backlog were kept in GitHub [Issues](https://github.com/CivicActions/agile-california/issues?q=label%3A"user+story"+sort%3Acreated-asc) and managed via [Waffle](https://waffle.io/CivicActions/agile-california?label=user%20story). We managed this backlog every day as we made progress on stories and got more user feedback.
7. We invited users to all of our sprint demos and they provided valuable feedback at every stage of the project, from ideation to wireframes to coded prototype. They also performed usability testing of our AWS deployed prototype.

#### Key questions
1. Who are your primary users?
2. What user needs will this service address?
3. Why does the user want or need this service?
4. Which people will have the most difficulty with the service?
5. Which research methods were used?
6. What were the key findings?
7. How were the findings documented? Where can future team members access the documentation?
8. How often are you testing with real people?

#### Answers to key questions

1. At the start of the project we understood the primary users to be foster parents and case workers. After submitting questions to the State, we learned that biological parents were in fact the intended primary users. We adjusted our focus accordingly.
2. Communication between parents (both foster and biological) and caseworkers is costly and cumbersome, and finding drop-off and visitation sites difficult. The service we designed would address both of these user needs.
3. Parents want simpler, more immediate communication about the status of their children, and caseworkers need to be able to effectively handle a large caseload.
4. We have not yet addressed the problem of people who don't use smart phones - a potential future enhancement would be to integrate bidirectional SMS capability into the Inbox.
5. The following user research methods were used: [User Interviews](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews), [Design Studio](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/wireframes), [Personae](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/user-personas.md), [Empathy Map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-research/foster-parent-empathy-map.md), [Story Map](https://github.com/CivicActions/agile-california/blob/master/documentation/ux/user-story-map/user-story-map.md), [Wireframes](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/wireframes).
6. Key findings were that parents want streamlined communication, and that changes to visitation status and arrange drop-off locations are a big deal to them.
7. All of our work is publicly [documented](https://github.com/CivicActions/agile-california/blob/master/documentation) including our all of our UX findings.
8. We tested with real people during each of our 6 sprints.

<a name="Play2"></a>
## Play 2
### Address the whole experience, from start to finish

We need to understand the different ways people will interact with our services, including the actions they take online, through a mobile application, on a phone, or in person. Every encounter — whether it's online or offline — should move the user closer towards their goal.

#### Checklist
1. Understand the different points at which people will interact with the service – both online and in person
2. Identify pain points in the current way users interact with the service, and prioritize these according to user needs
3. Design the digital parts of the service so that they are integrated with the offline touch points people use to interact with the service
4. Develop metrics that will measure how well the service is meeting user needs at each step of the service

#### Actions
1. We [interviewed several parents and case workers](https://github.com/CivicActions/agile-california/tree/master/documentation/ux/user-interviews) to get a clearer picture of their needs and how they would prefer to interact with the system. We learned that foster parents, case workers, and biological parents will need to interact with the system in a variety of circumstances - sometimes under duress (i.e. a foster parent is being contacted by a bio parent for visitation but foster parent doesn't know visitation status and needs to contact case worker). Therefore, the system needs to be flexible enough to be accessed on-the-go. We built a completely responsive site and would propose building a separate mobile app in the future so users can get immediate notifications about new messages. 
2. In addition to conducting direct user interviews, we constructed empathy maps and personas that helped us further synthesize the feedback from parents and case workers. This process uncovered users' main pain points and helped us to understand what they could gain from a better system. Once we understood the most critical pain points for each user, we prioritized building features to resolve these issues. 
3. Biological parents and foster parents would be given literature to orient them towards the website and instructions to download the (future) mobile app. Case workers would be provided links and instructions in an organization-wide training.
4. We installed Google Analytics and would plan to perform user surveys and direct observation to watch users navigating through the site and app.

#### Key questions
- What are the different ways (both online and offline) that people currently accomplish the task the digital service is designed to help with?
- Where are user pain points in the current way people accomplish the task?
- Where does this specific project fit into the larger way people currently obtain the service being offered?
- What metrics will best indicate how well the service is working for its users?

#### Answers to key questions

1. Currently, most parents and case workers interact through phone calls or text messaging. More infrequently, they use email.
2. The most critical pain point for parents is that they often have to call caseworkers multiple times, waiting long periods of time without a response, to get vital information such as the visitation status of a child. These delays cause strife between the biological parent, foster parent, caseworker, and system. We learned that there is no clear method to escalate concerns in the case of an urgent need. Caseworkers, who often get the same request over and over again, complained about having too large of a workload and not enough time to address concerns. We spent the bulk of our time creating and refining a messaging system with the ability to escalate messages in priority, to provide a paper trail showing when parents have contacted caseworkers, and to give case workers the ability to point to previous responses so they don't have to duplicate replies. 
3. The power of this project lies in facilitating communication between an overburdened county employee and equally stressed biological and foster families, who we repeatedly heard were just trying "to do their primary job," which is take care of children. This system would reduce the need for frequent parent calls to caseworkers. A caseworker could reply instantly, from wherever he or she may be, and even copy and paste answers to save time. 
4. Metrics to indicate how well the service is working would be: reduced number of calls between case workers/parents; percentage of the number of families/case workers overall as site visitors; number of returning visitors (to measure how many users must be finding the website/app useful); and bounce rate (how many users abandoned the system). Additionally, user surveys and further usability testing would provide qualitative information about whether users are able to successfully navigate through the app and perform critical functions.

<a name="Play3"></a>
## Play 3
### Make it simple and intuitive

Using a government service shouldn’t be stressful, confusing, or daunting. It’s our job to build services that are simple and intuitive enough that users succeed the first time, unaided.

#### Checklist
1. Create or use an existing, simple, and flexible design style guide for the service
2. Use the design style guide consistently for related digital services
3. Give users clear information about where they are in each step of the process
4. Follow accessibility best practices to ensure all people can use the service
5. Provide users with a way to exit and return later to complete the process
6. Use language that is familiar to the user and easy to understand
7. Use language and design consistently throughout the service, including online and offline touch points

#### Actions
1. We used [Bootstrap](http://getbootstrap.com/) as a user interface baseline and grid framework.
2. This is a very simple application and Bootstrap is used consistently for all page components.
3. The application enables users (both parents and caseworkers) to view and send messages, view nearby residential facilities on a map, and edit a personal profile. Upon sending a new message or replying to an existing one, the message posts in the thread and a confirmation message displays, giving immediate visual feedback. When a user updates their profile, a confirmation message displays to indicate that changes have been saved. Breadcrumbs are also visible to assist with navigation of the site.
4. Drupal has excellent accessibility out of the box and we took care to ensure our development retained or enhanced this - for example in the Inbox, we display "unread" and "urgent" statuses in text (rather than relying on color only) to make this information accessible.
5. Users may edit some profile fields, save, and then return later to complete their profiles. The other user activities (viewing or sending a message and viewing facilities on a map) are simple, one-step processes.
6. Language is kept to a minimum so the focus can remain on the content of user profiles, messages, and maps. We've minimized or removed unnecessary text.
7. The solution we built is currently only an online service.

#### Key questions
- What primary tasks are the user trying to accomplish?
- Is the language as plain and universal as possible?
- What languages is your service offered in?
- If a user needs help while using the service, how do they go about getting it?
- How does the service’s design visually relate to other government services?

#### Answers to key questions

1. Primarily, users wants to be able to send and receive messages, and to be able to indicate whether a message is urgent and needs immediate attention. Secondarily, the users want to find residential facilities within or near to their zip code, and to maintain an up-to-date profile that contains information relevant to other users of the system. For example, parents want to share information about themselves that will be helpful to caseworkers, such as how many children they have in their home, and caseworkers want to share information that will be helpful to parents, such as shift hours.
2. The language is as plain and universal as possible.
3. English only at present, but using Drupal it would be straightforward to extend the interface and content to multiple languages.
4. We use tool tips, suggested text, and/or field-level help text for most fields on the site.
5. We haven't attempted to harmonize with other government services, since this is a standalone application. We aimed for a modern, Bootstrap-style responsive design.

<a name="Play4"></a>
## Play 4
### Build the service using agile and iterative practices

We should use an incremental, fast-paced style of software development to reduce the risk of failure. We want to get working software into users’ hands as early as possible to give the design and development team opportunities to adjust based on user feedback about the service. A critical capability is being able to automatically test and deploy the service so that new features can be added often and be put into production easily.

#### Checklist
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
1. Our prototype, [http://agile-ca.civicactions.com/](http://agile-ca.civicactions.com/), was made live on the second day of our project, solved a core user need by day 7 and was shared with users as an MVP by day 10.
2. We did usability tests with foster parents and caseworkers as well as staff (who were not involved in design or development) in each sprint.
3. Daily scrums, targeted sub-group meetings, chat (Slack), and Sprint rituals (retrospectives, sprint planning meetings, backlog grooming meetings) constituted the central pillars of our team communication.
4. We had an egalitarian team of 4-7 with no management layers. The Product Owner was a coding member of the team.
5. Features are pushed to the live site multiple times each day, as evidenced by the log in Github and Slack.
6. We religiously kept our feature backlog up-to-date every day using Waffle on top of GitHub Issues.
7. Using Github for this - all project members and user-testers/stakeholders have access and the repository is also public.
8. We used [GitHub issues](https://github.com/CivicActions/agile-california/issues?utf8=✓&q=is%3Aissue) for all bugs and story writing, which was done by all team members.
9. Our Technical Architect performed code review with the two other coders of each [pull request](https://github.com/CivicActions/agile-california/pulls?utf8=%E2%9C%93&q=is%3Apr).

#### Key questions
- How long did it take to ship the MVP? If it hasn't shipped yet, when will it?
- How long does it take for a production deployment?
- How many days or weeks are in each iteration/sprint?
- Which version control system is being used?
- How are bugs tracked and tickets issued? What tool is used?
- How is the feature backlog managed? What tool is used?
- How often do you review and reprioritize the feature and bug backlog?
- How do you collect user feedback during development? How is that feedback used to improve the service?
- At each stage of usability testing, which gaps were identified in addressing user needs?

#### Answers to key questions

1. MVP was shown to test users after Sprint 4.
2. Including the time to run all tests, we deploy in less than 15 minutes. The deploy is fully automated with no manual steps required (beyond triggering the deploy).
3. Used very rapid Sprints of 2 Sprints per week, or 2.5 days per Sprint.
4. Git
5. [Github issue queue](https://github.com/CivicActions/agile-california/issues?utf8=✓&q=is%3Aissue)
6. [Waffle.io, on top of GitHub Issues](https://waffle.io/CivicActions/agile-california).
7. Everyday, with Waffle.io.
8. Every demo (twice per week) we have formal interaction with users, who also did additional testing, amounting to approximately 3 feedback sessions per week.
9. We identified fundamental needs unmet by existing technology, especially around communication, and specializations of communication around fostering, such as medical incidents and visitation.

<a name="Play5"></a>
## Play 5
### Structure budgets and contracts to support delivery

To improve our chances of success when contracting out development work, we need to work with experienced budgeting and contracting officers. In cases where we use third parties to help build a service, a well-defined contract can facilitate good development practices like conducting a research and prototyping phase, refining product requirements as the service is built, evaluating open source alternatives, ensuring frequent delivery milestones, and allowing the flexibility to purchase cloud computing resources.

[The TechFAR Handbook](https://playbook.cio.gov/techfar/) provides a detailed explanation of the flexibilities in the Federal Acquisition Regulation (FAR) that can help agencies implement this play.

#### Checklist
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

#### Key questions
- What is the scope of the project? What are the key deliverables?
- What are the milestones? How frequent are they?
- What are the performance metrics defined in the contract (e.g., response time, system uptime, time period to address priority issues)?

#### Answers to key questions

1. See RFI and related documents.
2. See RFI and related documents.
3. See RFI and related documents.

<a name="Play6"></a>
## Play 6
### Assign one leader and hold that person accountable

There must be a single product owner who has the authority and responsibility to assign tasks and work elements; make business, product, and technical decisions; and be accountable for the success or failure of the overall service. This product owner is ultimately responsible for how well the service meets needs of its users, which is how a service should be evaluated. The product owner is responsible for ensuring that features are built and managing the feature and bug backlogs.

#### Checklist
1. A product owner was assigned.
2. All stakeholders agree that the product owner has the authority to assign tasks and make decisions about features and technical implementation details.
3. The product owner has a product management background with technical experience to assess alternatives and weigh tradeoffs.
4. The product owner has a work plan that includes budget estimates and identifies funding sources
5. The product owner has a strong relationship with the contracting officer

#### Actions
1. [Product owner was identified as Robert L. Read](https://github.com/CivicActions/agile-california/blob/master/documentation/journal.md).
2. Stakeholders in this instance were all team members, and all agreed to authority as outlined was granted to product owner on day 1 of Sprint.
3. Product owner has a PhD in Computer Science and Director-level team management experience.
4. We early established a [labor budget matrix](https://docs.google.com/spreadsheets/d/1lCsBoJf4DgThtw6jkY5AQBrFEQdssw9FyoKQoYSpbtQ/edit#gid=467546033) of peoples skills against their availability.
5. N/A

#### Key questions
- Who is the product owner?
- What organizational changes have been made to ensure the product owner has sufficient authority over and support for the project?
- What does it take for the product owner to add or remove a feature from the service?

#### Answers to key questions

1. [A single product owner, Robert L. Read, was assigned](https://github.com/CivicActions/agile-california/blob/master/documentation/journal.md).
2. Although CivicActions maintains a professional and highly collaborative environment, the Product Owner was empowered to make prioritizaion decisions and assign tasks.
3. The product owner required no additional authority, but based all decisions on user feedback.

<a name="Play7"></a>
## Play 7
### Bring in experienced teams

We need talented people working in government who have experience creating modern digital services. This includes bringing in seasoned product managers, engineers, and designers. When outside help is needed, our teams should work with contracting officers who understand how to evaluate third-party technical competency so our teams can be paired with contractors who are good at both building and delivering effective digital services. The makeup and experience requirements of the team will vary depending on the scope of the project.

#### Checklist
1. Member(s) of the team have experience building popular, high-traffic digital services
2. Member(s) of the team have experience designing mobile and web applications
3. Member(s) of the team have experience using automated testing frameworks
4. Member(s) of the team have experience with modern development and operations (DevOps) techniques like continuous integration and continuous deployment
5. Member(s) of the team have experience securing digital services
6. A Federal contracting officer is on the internal team if a third party will be used for development work
7. A Federal budget officer is on the internal team or is a partner
8. The appropriate privacy, civil liberties, and/or legal advisor for the department or agency is a partner

#### Actions
1. Yes - though our "high-traffic" credentials might not be at a Google or Facebook level, we do have experience scaling complex, interactive, personalized digital services for hundreds of thousands of users.
2. Yes - all of our developers have web/mobile application development experience.
3. Yes - all projects our team work on include a level of automated testing.
4. Yes - we automate all testing and deployment tasks and configure the tasks to provide immediate feedback for the team.
5. Yes - we have security and compliance experts on staff (although did not undertake a security and compliance process for this prototype).
6. N/A
7. N/A
8. N/A

<a name="Play8"></a>
## Play 8
### Choose a modern technology stack

The technology decisions we make need to enable development teams to work efficiently and enable services to scale easily and cost-effectively. Our choices for hosting infrastructure, databases, software frameworks, programming languages and the rest of the technology stack should seek to avoid vendor lock-in and match what successful modern consumer and enterprise software companies would choose today. In particular, digital services teams should consider using open source, cloud-based, and commodity solutions across the technology stack, because of their widespread adoption and support by successful consumer and enterprise technology companies in the private sector.

#### Checklist
1. Choose software frameworks that are commonly used by private-sector companies creating similar services
2. Whenever possible, ensure that software can be deployed on a variety of commodity hardware types
3. Ensure that each project has clear, understandable instructions for setting up a local development environment, and that team members can be quickly added or removed from projects
4. [Consider open source software solutions](http://www.whitehouse.gov/sites/default/files/omb/assets/egov_docs/memotociostechnologyneutrality.pdf) at every layer of the stack

#### Actions
1. We used [Drupal 8](https://www.drupal.com/showcases), with [MapBox](https://www.mapbox.com/showcase/) as our mapping tool, and [Bootstrap](https://expo.getbootstrap.com/) as our styling tool - these links demonstrate some major private-sector companies that use these technologies.
2. We used Bootstrap in order to be Responsive, and tested with desktops, iPhones, and Android operating systems.
3. We have [reproducible sandbox installation instructions](https://github.com/CivicActions/agile-california/blob/master/documentation/devops-manual.md) with minimal dependencies (self hosting), and continuous integration of unit test framework.
4. The Docker Machine host operating system ([Ubuntu](http://www.ubuntu.com/)), [Docker](https://www.docker.com/products/docker-engine), [Docker Compose](https://www.docker.com/products/docker-compose), container operating systems (minimal [Debian](https://www.debian.org/)), [Apache httpd](https://httpd.apache.org/), [MariaDB](https://mariadb.org/), monitoring ([uptime](https://github.com/fzaninotto/uptime)), testing ([Selenium Builder](https://github.com/SeleniumBuilder/se-builder), [se-interpreter](https://github.com/Zarkonnen/se-interpreter)), deployment tools ([Docker Machine](https://www.docker.com/products/docker-machine), [AWS CLI](https://github.com/aws/aws-cli), [CloudFlare CLI](https://github.com/danielpigott/cloudflare-cli)), automation ([Jenkins](https://jenkins.io/), [Bowline](https://github.com/davenuman/bowline)), [PHP](https://secure.php.net/), PHP libraries ([Symfony](https://symfony.com/)) and frontend frameworks ([Bootstrap](https://getbootstrap.com/), [jQuery](https://jquery.com/), [Mapbox](https://www.mapbox.com/), [Datatables](https://datatables.net/)) are all open source licensed.

#### Key questions
- What is your development stack and why did you choose it?
- Which databases are you using and why did you choose them?
- How long does it take for a new team member to start developing?

#### Answers to key questions

1. Drupal 8 was a backbone that provided out-of-the-box user management and configurable profiles. MapBox and GeoJSON allowed easy utilization of the API offered by the state for finding residential facilities. Docker and Docker Compose for development, due to need for rapid developer onboarding, as well as for allowing full consistency with production environment. JQuery and Bootstrap on the front end. We choose all of these components as light-weight and suited to rapid development and feedback cycles for a simple application.
2. We installed Drupal 8 on top of MariaDB 10 as a standard default database solution.
3. In this simple app, a Drupal developer will need no more than a day to start contributing. One team member contributed the MapBox code in single day, which was then integrated into Drupal in a second day.

<a name="Play9"></a>
## Play 9
### Deploy in a flexible hosting environment

Our services should be deployed on flexible infrastructure, where resources can be provisioned in real-time to meet spikes traffic and user demand. Our digital services are crippled when we host them in data centers that market themselves as “cloud hosting” but require us to manage and maintain hardware directly. This outdated practice wastes time, weakens our disaster recovery plans, and results in significantly higher costs.

#### Checklist
1. Resources are provisioned on demand
2. Resources scale based on real-time user demand
3. Resources are provisioned through an API
4. Resources are available in multiple regions
5. We only pay for resources we use
6. Static assets are served through a content delivery network
7. Application is hosted on commodity hardware

#### Actions
1. Fully automated deployment script provisions Amazon Web Services (AWS) infrastructure, and Cloudflare DNS/CDN. Docker based container architecture runs on AWS infrastructure could be horizontally scaled with minimal effort.
2. Yes
3. Using AWS and Cloudflare APIs allow automatic provisioning.
4. AWS region is configurable and instances are self contained (no master database needed), although we do not need this.
5. AWS charges by the minute.
6. Cloudfront is used as a content delivery network.
7. AWS uses commodity hardware.


#### Key questions
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

#### Answers to key questions

1. Amazon Web Services, US West (Oregon) data center, although this can be changed with a deployment parameter, and additional regions can be added with geographic DNS balancing.
2. t2.micro. See [Instance Types](http://aws.amazon.com/ec2/instance-types/) for more details. This is also configurable with a deployment parameter.
3. N/A - we do not yet have enough users to measure.
4. The CloudFlare CDN is robust enough to handle a substantial surge in traffic.
5. With cloud computing we can scale up our capacity as much as we want.
6. Provisioning our server instances is automated and takes under 20 minutes for a full deployment (frontend and backend).
7. Using the docker-compose product we can easily scale any of our containers. (For example, the command `docker-compose scale web=2` would double the number of deployed web containers). We can further scale across multiple AWS instances by externalizing the master database to a scalable backend (e.g. AWS RDS), adding additional instances with the deploy script then load balancing by adding the additional instance IPs to Cloudflare.
8. Amazon pricing, which has some fixed and some usage rates.
9. We are using the West Coast AWS region data center. The CloudFlare CDN mirrors the site in many servers worldwide.
10. Assuming Github is online, we could be back online in a different region within 20 to 30 minutes.
11. Our app is not storing any critical data at the prototype stage - all data is loaded automatically on build, or accessed dynamically.
12. We are storing no non-derivative data at the prototype stage. Redundancy could be added simply by adding an additional region to the deploy script.
13. We are using the AWS and CloudFlare APIs and web interfaces so we do not need to contact our provider for resources.

<a name="Play10"></a>
## Play 10
### Automate testing and deployments

Today, developers write automated scripts that can verify thousands of scenarios in minutes and then deploy updated code into production environments multiple times a day. They use automated performance tests which simulate surges in traffic to identify performance bottlenecks. While manual tests and quality assurance are still necessary, automated tests provide consistent and reliable protection against unintentional regressions, and make it possible for developers to confidently release frequent updates to the service.

#### Checklist
1. Create automated tests that verify all user-facing functionality
2. Create unit and integration tests to verify modules and components
3. Run tests automatically as part of the build process
4. Perform deployments automatically with deployment scripts, continuous delivery services, or similar techniques
5. Conduct load and performance tests at regular intervals, including before public launch

#### Actions
1. End-to-end tests for mobile and desktop viewports were developed using the open-source [Selenium Builder](https://github.com/SeleniumBuilder/se-builder) testing framework. Tests run in fully managed Docker based [Google Chrome](https://hub.docker.com/r/selenium/standalone-chrome/) and [Mozilla Firefox](https://hub.docker.com/r/selenium/standalone-firefox/) Selenium driven browsers, and test profile and mapping functionality.
2. We used Jenkins to run the automated tests on each candidate deploy and notify us immediately on Slack if tests passed of failed. Tests were automated using the [se-interpreter](https://github.com/Zarkonnen/se-interpreter) runner and run in Firefox and Chrome browsers.
3. The build process runs on every git push, and includes automated tests.
4. We use automated deployment that can be initiated with a single Slack command to automatically create a new AWS EC2 server instance and deploy the entire stack onto it.
5. No - in this rapid prototype, we have not invested in performance testing. Our monitoring system and Google Analytics can provide response time data.

#### Key questions
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

#### Answers to key questions

1. Perhaps 40%.
2. A very very minor fix can be coded, built, tested, and deployed in 25 minutes (5 minutes development, 5 minutes code review, 8 minutes automated testing and 7 minutes for automated build and deployment). Coding time is often longer, of course.
3. Our total process from conception to deployment can take as little as 3 hours. Once fully coded, the build time is the same as for bugs.
4. The build/test process runs on demand. We made over 100 code deploys to production, around 6 per-day.
5. We are using Jenkins as our central tool, which uses docker, docker-compose, and docker-machine to manage the containers.
6. We are using Jenkins as our central tool, which uses docker, docker-compose, and docker-machine to manage the containers, as well as report and chart test results.
7. We think there are as many as 50,000 foster kids in California. This would be a relatively modest user base.
8. We haven't tested this.
9. We haven't tested this.
10. We suspect in this limited use that immediate scaling will not be required.

<a name="Play11"></a>
## Play 11
### Manage security and privacy through reusable processes

Our digital services have to protect sensitive information and keep systems secure. This is typically a process of continuous review and improvement which should be built into the development and maintenance of the service. At the start of designing a new service or feature, the team lead should engage the appropriate privacy, security, and legal officer(s) to discuss the type of information collected, how it should be secured, how long it is kept, and how it may be used and shared. The sustained engagement of a privacy specialist helps ensure that personal data is properly managed. In addition, a key process to building a secure service is comprehensively testing and certifying the components in each layer of the technology stack for security vulnerabilities, and then to re-use these same pre-certified components for multiple services.

The following checklist provides a starting point, but teams should work closely with their privacy specialist and security engineer to meet the needs of the specific service.

#### Checklist
1. Contact the appropriate privacy or legal officer of the department or agency to determine whether a System of Records Notice (SORN), Privacy Impact Assessment, or other review should be conducted
2. Determine, in consultation with a records officer, what data is collected and why, how it is used or shared, how it is stored and secured, and how long it is kept
3. Determine, in consultation with a privacy specialist, whether and how users are notified about how personal information is collected and used, including whether a privacy policy is needed and where it should appear, and how users will be notified in the event of a security breach
4. Consider whether the user should be able to access, delete, or remove their information from the service
5. “Pre-certify” the hosting infrastructure used for the project using FedRAMP
6. Use deployment scripts to ensure configuration of production environment remains consistent and controllable

#### Actions
1. NA
2. NA
3. NA
4. NA
5. AWS infrastructure is FedRAMP certified, including in the region we are using.
6. CivicActions uses Docker and other Infrastructure as Code tools to automate and control the creation, configuration and deployment of development and production environments.

#### Key questions
- Does the service collect personal information from the user?  How is the user notified of this collection?
- Does it collect more information than necessary? Could the data be used in ways an average user wouldn't expect?
- How does a user access, correct, delete, or remove personal information?
- Will any of the personal information stored in the system be shared with other services, people, or partners?
- How and how often is the service tested for security vulnerabilities?
- How can someone from the public report a security issue?

#### Answers to key questions

1. The service does collect personal information (via profile forms), but only on a demonstration basis (the data is periodically wiped).
2. The fields selected were all added in response to specific use cases provided by site users and as many fields as possible were left optional. Sensitive fields (e.g. zip code) were not displayed.
3. We should provide a way to remove data upon leaving the product but we have not.
4. No
5. This would depend on California policies.
6. We do not have a process for this during the prototype phase.

<a name="Play12"></a>
## Play 12
### Use data to drive decisions

At every stage of a project, we should measure how well our service is working for our users. This includes measuring how well a system performs and how people are interacting with it in real-time. Our teams and agency leadership should carefully watch these metrics to find issues and identify which bug fixes and improvements should be prioritized. Along with monitoring tools, a feedback mechanism should be in place for people to report issues directly.

#### Checklist
1. Monitor system-level resource utilization in real time
2. Monitor system performance in real-time (e.g. response time, latency, throughput, and error rates)
3. Ensure monitoring can measure median, 95th percentile, and 98th percentile performance
4. Create automated alerts based on this monitoring
5. Track concurrent users in real-time, and monitor user behaviors in the aggregate to determine how well the service meets user needs
6. Publish metrics internally
7. Publish metrics externally
8. Use an experimentation tool that supports multivariate testing in production

#### Actions
1. [AWS provides tools](https://aws.amazon.com/documentation/cloudwatch/) for this monitoring.
2. Our [monitoring system](https://github.com/CivicActions/agile-california/tree/master/monitoring) tracks system response time and error rates from designated monitoring location(s). Google Analytics also tracks real user page response time, error rates etc.
3. We have not done this, however monitoring and Google Analytics track data in sufficiently detailed form allowing for percentile reports to be generated offline.
4. Our [monitoring system](https://github.com/CivicActions/agile-california/tree/master/monitoring) provides automated e-mail alerts and can be configured to submit to webhooks for real time alerting systems.
5. Google Analytics was set up and tracks concurrent users in real time, as well as in aggregate.
6. There was not enough time or traffic to gather sufficient data to provide a useful report.
7. There was not enough time or traffic to gather sufficient data to provide a useful report.
8. Google Analytics provides this functionality, but there was not enough time or traffic to gather sufficient data to perform multivariate testing.

#### Key questions
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

#### Answers to key questions

1. User interactions with each major feature (profiles, messaging, mapping), messages sent per unit time.
2. There was not enough time or traffic to gather sufficient data to assess this.
3. [AWS CloudWatch](https://aws.amazon.com/documentation/cloudwatch/), [uptime monitoring system](https://github.com/CivicActions/agile-california/tree/master/monitoring).
4. For 90% of page load requests should have a response within 1 second, 98% within 2 seconds, and 99% within 4 seconds.
5. There was not enough time or traffic to gather sufficient data to assess this.
6. There was not enough time or traffic to gather sufficient data to assess this.
7. Given rapid prototype "beta" production, we would aim for 98% uptime for the initial launch, moving upwards as user base grows and platform stabilizes.
8. There was not enough time or traffic to gather sufficient data to assess this.
9. Email.
10. We coordinate this on Slack, assigning an owner for each incident, working closely on triage and remediation. All incidents are considered using a root cause analysis, and discussed with the entire development and operations team based on those findings to improve process and tools as needed.
11. We are using Google Analytics on the site so that we can gain better insight into usage and behavior. We are also planning on basic usability testing using a remote testing tool after the release of the MVP.
12. Our MVP is rapidly evolving and we are not ready for A/B testing at this time.
13. We have interviewed users consistently throughout our development process in order to garner their feedback on the product. And we have included a way for users to submit suggestions, issues and ideas from the site. Future plans include surveys.

<a name="Play13"></a>
## Play 13
### Default to open

When we collaborate in the open and publish our data publicly, we can improve Government together. By building services more openly and publishing open data, we simplify the public’s access to government services and information, allow the public to contribute easily, and enable reuse by entrepreneurs, nonprofits, other agencies, and the public.

#### Checklist
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
1. We have an open repository which allows issues to be created by the public, and have been capturing bugs from our users as part of our user testing processes.
2. We have no datasets yet, but we explicitly [invited](https://civicactions.com/blog/an-open-invitation-to-collaborate/) our competitors to share our code.
3. N/A
4. N/A
5. N/A - the government can do this, but we do not. We have placed our code in the public domain. If we paid for any sub-contracting, we would of course do this.
6. N/A - we have chosen to publish as the government does, in the public domain. A GPL or other share-alike system would allow us to do this. We hope the government demands such licensing where legally entitled to in the future.
7. Our users asked for a way for the court to announce changes in foster child status or location moves. In theory we could implement this as an API, but we have no power to get the California court system to use it.
8. We have done this as required by the RFI and our principles. https://github.com/CivicActions/agile-california
9. We have done fiercely with our blog posts.

#### Key questions
- How are you collecting user feedback for bugs and issues?
- If there is an API, what capabilities does it provide? Who uses it? How is it documented?
- If the codebase has not been released under an open source license, explain why.
- What components are made available to the public as open source?
- What datasets are made available to the public?

#### Answers to key questions

1. Of course at first we did direct interviews, then as the MVP matured, direct, observed user testing. We have an open Github repository.
2. N/A
3. It is open source.
4. All components. Licenses are documented in associated [LICENSE.md](https://github.com/CivicActions/agile-california/blob/master/LICENSE.md).
5. None in addition to what we are repackaging.
