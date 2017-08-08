# Heart Haven Outreach

## Background
Heart Haven Outreach (H2O)  is a ten-year old organization that serves the needs of the Valley View School District "at-risk" youth. They currently serve about 160 high school aged youth referred to us through the school district and the community. They have touched and changed the lives of over 1200 youth since we opened our doors. However, they do so on very limited funding and a limited number of staff.

See their [website](http://www.hearthavenoutreach.org) for more details.

 They are located in Bolingbrook and their IT is currently managed by the Village of Bolingbrook.  We've worked on two projects for them.  The first is an employee/volunteer evaluation form.  The second is a project to collect student data more effectively.  Once the projects are finished, we need to find a webhost for them so that the applications can be deployed. Both projects been implemented with a MySQL database and PHP.

## Evaluation Project
This application will be used to evaluate volunteers and employees.  A staff member will complete a self-evaluation and an administer will also evaluate the staff member.  Reports summarizing the evaluation are provided.  The application is currently running on our Front server. You can access it  [here](http://cs.lewisu.edu/~howardcy/h2o/evaluation).  Ask me for credentials.

### Things to do
- Complete the user interface.  There are many links that need to be implemented.  Also, the reporting pages are non uniform.
- Evaluate security of the application.  Be sure that all inserts use prepared statements to prevent SQL injection attacks.


## Survey Project

This project currently allows a user to take a pretest and a post test. There is a  database named h20_survey and there are 3 tables. One for users, one for the pretest answers, and one for the post test answers. After the tests are completed the data is stored in the database and is also sent to already existing files in CSV format (*does not appear to be working*).  This application is also running on the Front Server.  You can access it [here](http://cs.lewisu.edu/~howardcy/h2o/survey/Main.php).  No credentials are required.

### Things to do
- Break survey into multiple pages.  A single page is too long.
- Identify missing answers on a page.  Currently, the user is returned to the survey page but missing answers are not highlighted.
- Determine if there is a better way to authenticate.  Currently pre- and post-surveys are matched on user name.  This may not be sufficient.
- Add reporting.  There are currently CSV files, although it doesn't appear to work.  Actual reports should be added.
  - individual reports
  - composite reports
