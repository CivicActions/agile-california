**Sprint 1: User interview findings & preliminary user stories**

Included in this document: 1) which users were interviewed, and 2) some initial thoughts on what would be of value to users based on preliminary conversations

**Users interviewed:** 

 - Foster parent working w/ agency 
 - Foster parent working directly w/ county 
 - Legal guardian

**Needs / wants we heard about:** 

 - Foster Parents
	 - Simple communications: to be able to easily and quickly communicate with caseworker, either at agency or County 
	 - To get a response from county in less than 24 hours
	 - To handoff communications with bio family (i.e. re: reunification plan) to caseworker
	 - To get verification that the county has received a communication and status of response 
	 - To be able to look up/understand county policies 
	 - To be able to focus on my job, which to care for the child
	 - To keep the social worker informed about how the child is doing
	 - To find additional services for a child with special needs (through residential facilities)
	 - To find resources when I am new to the foster care system
	 - Transparency into process and eligibility

 - Legal guardian
	 - To navigate the county legal system

**Pain Points:**

 - Foster Parent
	 - Basic communications are difficult: supervisors and workers at county often don’t respond to phone calls or emails in a timely manner
	 - No indication as to whether county worker has even received a communication or when a response can be expected
	 - Having no control over a situation negatively affects the child
	 - Navigating policies / paperwork

 - Social Worker (county employee)
	 - Overwhelmed with huge case loads
	 - Have to be in court for days at a time and get behind on email and phone communications

**Terms/Vocabulary:**

 - Foster Parent
 - Social Worker
 - Emergency Worker
 - Placement Worker
 - Youth Services
 - Recruitment Development Team
 - “Respite”

**Ideas / what would be of value:**

 - Easy-to-use private messaging system
	 - Provides paper trail
	 - **Shows status of communications**
		 - Look to issue queue model (eg Acquia) as way of tracking requests and response
		 - Build a way to mark request as “seen”, like fb messenger 
	 - Way to mark communication as “critical” or “urgent”
 - Resource directory 
 - Flow chart or diagram to understand all steps in the process

**USER STORIES**

*Messaging*

As a foster parent:

 - I would like to private message my case worker, and indicate the priority / urgency of the message.
 - I would like to see whether the message has been read.
 - I would like to have a quick way to escalate the message to the Worker’s supervisor.
 - I would like to see the average response time for my case worker.
 - I would like to see the last login time for my case worker.
 - I would like to see whether my worker will next be (on shift).
 - I would like an ability text msg or phone directly.
 - I would like to cc others who are on the team on certain messages (maybe auto default CCs for certain types of messages (medical, etc).
 - I would like to be able to archive messages so that I have a paper trail in case I need to go to court.
 - I want my profile and facility lookup experience to be seamlessly integrated with my messaging experience.

As a case worker:

 - I would like to be alerted immediately on urgent issues.

**Profiles**

 - As a new Foster Parent, I would like to see profiles of other foster parents to find out information such as what types of children they foster, how long they typically foster, what agencies they are affiliated with.
 - As a Case Worker, I would like to see profiles of foster parents to find a good fit for a child. 

**Story map:** https://civicactions.storiesonboard.com/m/agile-ca-prototype-story-map

**STRATEGIES**

 - Custom built messaging system
 - Case management or support ticket system - hypothesis that this is the best option given above user stories
 - Real time chat system

*Support (ticket) system evaluation*
Consider modern open source support ticket system (as opposed to custom built messaging system) to meet above stories:
E.g.
CiviCRM + CiviCase https://book.civicrm.org/user/current/case-management/what-is-civicase/
DiamanteDesk (PHP 5, Symfony2, Oro Platform, Bootstrap)
Helpy (Rails)
osTicket (PHP, MySQL)

*Support ticket system evaluation criteria:*
Can integrate (technologically or at least visually) with the user profile and facility lookup experience
Design can be easily customized, with little effort (or default design is awesome)
It’s modern: within last five years
Can accommodate prioritizing issues, archiving issues...
Created Waffle ticket to address this

**Assumptions/questions:**

 - Assumption: caseworkers won’t want a real-time messaging system (b/c it would be overwhelming).
 - Question: Would a real-time messaging system be useful? For who?


