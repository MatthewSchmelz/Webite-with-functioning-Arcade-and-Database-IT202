# IT202 Milestone3 Arcade Project (pts. 10.00)
## Instructions
1. Checkout Milestone3 branch
2. Create a milestone3.md file in your Project folder
3. git add/commit/push this empty file to Milestone2 branch (you'll need the link later)
4. Fill in the deliverable items
5. At the end copy the markdown and paste it into milestone3.md
6. git add/commit/push the md file to Milestone3
7. Do a Pull Request on GitHub between Milestone3 and dev. Then verify.
8. Do a Pull Request from dev to prod. Then verify.
9. Checkout dev locally and pull changes to get ready for Milestone 4.
10. Submit the direct link to this new milestone3.md file from your GitHub prod branch to Canvas.
Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod branches. All website links must be from NJIT's webserver from the prod URL. (you can assume/infer this by getting your dev URL and changing dev to prod).
## Desired Branch Name
### Milestone 3
## Deliverables
---
### Deliverable 1: User will have credits associated with their account (pts. 2).
<ul>

__SubTask 1:__ Add a **screenshot** of the user's table with the new credits column with valid data. Should be from VS Code db extensions

<ul>

#### Make sure if the  **screenshot**  contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot: ![Credits](https://user-images.githubusercontent.com/113381682/208266140-7d4e60ec-4759-482f-9ad9-3179f87ed920.PNG)
The end of the User table, with credits being on the right, Default is 5 but I have altered credits in various ways while debugging and testing other features.


</ul>

__SubTask 2:__ Add a **screenshot** of the code/sql that properly updates the credit/balance value based on CreditHistory. This field must not be incremented/decremented directly, you must use the CreditHistory table to calculate it and set it each time the credits change (hint: using SQL sum())

<ul>

#### Make sure if the  **screenshot**  contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot: ![image](https://user-images.githubusercontent.com/113381682/208266211-b26a5b41-0583-4898-92d3-fc3849957cae.png)
Credit History Table exists but is unused, as per allowed. Credits history table can be implemented in the future easily by inserting a new record into the table everytime a user creates a competition, joins a competition, or wins a place in a competition

</ul>

__SubTask 3:__ Add a **screenshot** showing the credits displaying on the user's profile page (a value > 0 must show)

<ul>

#### Make sure if the  **screenshot**  contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot: ![image](https://user-images.githubusercontent.com/113381682/208266776-d896b355-2970-4f06-9984-01c7d6d263e3.png)
Credits is above Score, this is from an empty profile that I only used to join various competitions, Default is 5, but is 1 in this case.

</ul>


__SubTask 4:__ Add a **screenshot** showing the code snippet of how the credits are fetched/displayed on the profile

<ul>

#### Make sure if the  **screenshot**  contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot: ![CreditsonProfile](https://user-images.githubusercontent.com/113381682/208267869-e0e76429-5beb-49f2-bd75-7e1b88511fb3.PNG)
The code and display data for showing credits on the account, taking them from the database, placing them in a variable and then displaying it.


</ul>

__SubTask 5:__ Briefly explain the code process for updating the credit/balance value and displaying it on the profile page

<ul>

> Explanation:  Lines 173-188 Are the SQL Commands/Statements that grab the Credit Value from the Database. It is larely reminiscent of the code from the List Roles table because most of the code is largely the same. It assigns the credits to the $creds variable. The rest of the code is displaying it to the Profile Page, if the $creds variable is empty/null it displays that the User has no credits, though in hinsight that may be extra code as that would only appear if the credits int is somehow null. If there are credits in the account, it displays them to the user's profile above the Scores table with a safer echo. 

</ul>

__SubTask 6:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/46

</ul>

__SubTask 7:__ Add a direct link to the NJIT webserver prod URL for the profile page

<ul>

#### Required url pattern: https?://web.njit.edu/~.+-prod/*

> URL(s): https://web.njit.edu/~mws36/mws36-prod/Project/profile.php

</ul></ul>

### Deliverable 2: Create a CreditHistory Table (pts. 0.25)
<ul>

__SubTask 1:__ Add a **screenshot** showing the CreditHistory table with valid records having been recorded

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Should be from VS Code db extensions |
| [ ] #2  | 1      | Clearly mention which records to look at |
<br>

#### Make sure if the  **screenshot**  contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![creditHistory](https://user-images.githubusercontent.com/113381682/208277214-8cbdd3e8-f030-4d5c-9cb9-a6d9f294a79a.PNG)

Credit History table is created, but does not have any record because it was stated we did not need to use it

</ul>

__SubTask 2:__ Add the related pull request link(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/46

</ul></ul>

### Deliverable 3: Competitions Table (pts. 0.25)
<ul>

__SubTask 1:__ Add a **screenshot** showing the Competitions table with valid records having been recorded

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Should be from VS Code db extensions |
| [ ] #2  | 1      | Clearly mention which records to look at |
| [ ] #3  | 1      | If the table is too large to show all columns, use multiple screenshots |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![Credit](https://user-images.githubusercontent.com/113381682/208269364-b0aeb540-a013-44c3-9748-893114f59806.PNG)
Credit history Table exists, but is unused due to time constraints, Would be able to add this by inserting a record into the table every time a user's credits is modified.

</ul>

__SubTask 2:__ Add the related pull request link(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/46

</ul> 

### Deliverable 4: User will be able to create a competition (pts. 2)
<ul>

__SubTask 1:__ Add a **screenshot**  of the Create Competition form with valid date filled in (including the expected cost)

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Should be an application page screenshot |
| [ ] #2  | 1      | If the form is too large, you may need multiple screenshots |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s): ![Competitions](https://user-images.githubusercontent.com/113381682/208269488-8f800bf6-dcc8-4745-acf0-55f3456e0fc4.PNG) All valid info has been filled in, all percentages come up to 100 percent.

</ul>

__SubTask 2:__ Add **screenshot(s)** showing success and error messages of the creation
process

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Show a message of not being able to afford |
| [ ] #2  | 1      | Show any related validation messages |
| [ ] #3  | 1      | Clearly label screenshots |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s):![Failure](https://user-images.githubusercontent.com/113381682/208269518-bc3853d0-f4c3-4db2-925c-b40d4208d7c9.PNG) Failure to Create due to No available Credits

![FailurePercent](https://user-images.githubusercontent.com/113381682/208269546-1425f759-8532-4ec1-a515-159f92391ed0.PNG) Failure to create due to percentages not adding to %100

![Successfully Registered Competition](https://user-images.githubusercontent.com/113381682/208269582-a8f7592f-52a6-4307-83e9-fbff022ccdfb.PNG) Successful creation.

</ul>

__SubTask 3:__ Add a **screenshot** of the new record in the Competitions table

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Should be related to the test data above |
| [ ] #2  | 1      | Should be from VS Code db extensions |
| [ ] #3  | 1      | Clearly mention which records to look at |
| [ ] #4  | 1      | If the table is too large to show all columns, use multiple screenshots |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot: ![Markdowngame](https://user-images.githubusercontent.com/113381682/208269615-fa6cc101-6229-4250-948d-b80e0a3c1bb0.PNG) Please refer to MarkdownGame, with the id of 8.


</ul>

__SubTask 4:__ Add a **screenshot** of the CreditHistory related to creating this competition

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Should be from VS Code db extensions |
| [ ] #2  | 1      | Clearly mention which records to look at |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s):  No Data has been created on the CreditHistory table due to time constraints. Could be included by Inserting a record into the CreditHistory database with the reason 'Competition Creation' and the credit value of what it took to create the competition.

</ul>

__SubTask 5:__ Add a **screenshot**  of the CompetitionParticipants table with the new record for this competition

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Should be from VS Code db extensions |
| [ ] #2  | 1      | Clearly mention which records to look at |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s): ![CompetitionParticipant](https://user-images.githubusercontent.com/113381682/208269709-317557f0-d31b-4d6b-948b-b11d2841b164.PNG) Refer to the latest record on the table, with ID 19.

</ul>

__SubTask 6:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/46

</ul>

__SubTask 7:__ Briefly explain the code flow for the creation process. Please use a list form and **not** a paragraph.

<ul>

> Explanation:  
<li>Lines 1-34 Are dedicated to the Form where you fill out all the data needed, Reward, JoinFee, Name, etc</li>
<li>34-90 Are dedicated to checking for errors, such as not enough participants if therres less then 3, ensuring all the forms are filled out, and that the percentages add up to 100</li> 
<li>The next step are is an if else statement checking if the user has enough credits to create a competition </li> 
<li>The last step is to insert the Competition into the Competition table with the information given in the form.</li> 
<li>If it successfully works, a message is flashed to the user showing that the registration worked.</li> 
</ul></ul>

### Deliverable 5: Each new participant causes the Reward value to increase by 50% of the joining fee rounded up (pts. 0.5)
<ul>

__SubTask 1:__ Add before and after **screenshots** of the Competition record in the DB when a user joins (showing the reward change)

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Should be from VS Code db extensions |
| [ ] #2  | 1      | Clearly mention which records to look at |
| [ ] #3  | 1      | Clearly label the captions |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot #1: ![starting](https://user-images.githubusercontent.com/113381682/208271512-71a9695c-fde9-4fe2-885c-f595eda19531.PNG)
Before a user has joined competition ID 1(Already tested it hence why the starting and current rewards are different, but will still show a after picture)
> Screenshot #2:   ![After](https://user-images.githubusercontent.com/113381682/208271638-0746a72b-d82a-4af8-9700-2929813535f7.PNG) After another user has joined, as can be seen the reward was multiplied by 1.5 for an extra %50 reward.

</ul>

__SubTask 2:__ Add a **screenshot** of the reward calculation logic (code)

<ul>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:   ![rewardlogic](https://user-images.githubusercontent.com/113381682/208271691-fa66ed9b-2a3f-4404-9079-d6f7aa9bb97d.PNG)
Reward logic is on lines 33-40 and 49-53

</ul>

__SubTask 3:__ Briefly explain the calculation

<ul>

> Explanation: A query is made to the database to get the current reward from the competition(using the Competition's ID). The query is then executed giving us the value. The value is then multiplied by 1.5 to get the new value. On the next set of lines the Competition table is then updated, turning the currentReward record from the previous value to the updated value. 

</ul>

__SubTask 4:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/46

</ul> 

__SubTask 5:__ Add a direct link to NJIT's webserver prod for this file (join competition)

<ul>

#### Required url pattern: https?://web.njit.edu/~.+-prod/*

> URL(s): https://web.njit.edu/~mws36/mws36-prod/Project/viewCompetitions.php
It is the same page used to view the competitions.

</ul></ul>


### Deliverable 6: Have a page where the user can see active competitions (pts. 1.25)
<ul>

__SubTask 1:__ Add a **screenshot** of the active competitions page list with a few active competitions

<ul>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:![competitionView](https://user-images.githubusercontent.com/113381682/208271855-22a6e88a-5bdb-4ccc-a157-332d792ecb3a.PNG)


</ul>

__SubTask 2:__ Add a **screenshot** of the  query including the WHERE clause). Ensure the complete query is visible. (code)

<ul>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot: 
![time3](https://user-images.githubusercontent.com/113381682/208272360-f50d9815-adef-4593-8ffd-5e37163b98b4.PNG)
The Query to select the data
</ul>

__SubTask 3:__ Briefly explain the query and the code used to display this data

<ul>

> Explanation:   The Querey takes the id, name, expiration, reward, joinfee, and the amount of participants from the Competitions table. If the expiration date has already passed the current timestamp, it is not listed as it is not an active competition. The code used to display the data is very similar to the listroles page, as it takes all the records and uses a for loop(For each) to go through all of the competition data and list it in the table provided. 



</ul>

__SubTask 4:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/46

</ul> 

__SubTask 5:__ Add a direct link to NJIT's webserver prod for this file (list competitions)

<ul>

#### Required url pattern: https?://web.njit.edu/~.+-prod/*

> URL(s): https://web.njit.edu/~mws36/mws36-prod/Project/viewCompetitions.php

</ul></ul>

### Deliverable 7: CompetitionParticipants table (pts. 0.25)
<ul>

__SubTask 1:__ Add a **screenshot** of the CompetitionParticipants table with valid data in it. Should be from VS Code db extensions.

<ul>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:   ![Comppart](https://user-images.githubusercontent.com/113381682/208272068-7c69f12e-e835-4245-95a8-5e4d00df30e2.PNG) Competition participant table with a bunch of participants.

</ul>

__SubTask 2:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/46

</ul></ul>


### Deliverable 8: User can join active competitions (pts. 1.25)
<ul>

__SubTask 1:__ Add before and after **screenshots** of the CreditHistory table

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Clearly label which is before and after |
| [ ] #2  | 1      | Clearly mention which records to look at |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot #1:  Credit history table is not utilized, but the credits are still taken from the account, as we were told we did not have to utilize it. Demo Video will show credits being deducted.
> Screenshot #2:

</ul>

__SubTask 2:__ Add before and after **screenshots** of the Competitions table showing the participant count update

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Clearly label which is before and after |
| [ ] #2  | 1      | Clearly mention which records to look at |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot #1:  
![before](https://user-images.githubusercontent.com/113381682/208272290-c0070ee8-a024-47b3-928b-af49f76a4573.PNG) The before photo, The Record being updated is ID 8, MarkdownGame
> Screenshot #2:![Markdowngameafter](https://user-images.githubusercontent.com/113381682/208272394-657e63e7-b1f1-461b-b83c-3b2e7b2363f3.PNG) The After Photo, The Record being updated is ID 8, MarkdownGame

</ul>

__SubTask 3:__ Add  **screenshot(s)** showing proper error and success messages

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Show message for "already registered" or if it's not possible,<br>show the code snippet the prevents it |
| [ ] #2  | 1      | Show the "can't afford" message" |
| [ ] #3  | 1      | Show successful join message |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s):  ![not enough cred](https://user-images.githubusercontent.com/113381682/208272573-ef04082e-674e-47cd-b4df-65e3111ae52d.PNG)
User does not have enough Credits to join
![alreadyjoined](https://user-images.githubusercontent.com/113381682/208272575-d7e07c7d-f884-4b01-9856-9402854145a2.PNG)
User is already in the Competition


</ul>

__SubTask 4:__ Briefly explain the logic/code for joining a competition and the involved steps. Please use a list format and **not** a paragraph format.

<ul>

> Explanation:   
<li>The Process starts with the user pressing the join button on the View Competitions page</li>
<li>The code then starts by grabbing the Competition's ID, the User's ID and getting the database</li> 
<li>The Code then calculates the credits to be removed by selecting the current credits from the user, and the joinFee from the competition. and stores in a variable</li> 
<li>If the User has more or equal credits to the join fee, it continues, if not it spits out an error</li> 
<li>The code then prepares the Compititon Participant table to accept the participant and compID, and attempts to execute it and the Competition Table through an Inner Join. If it does not work, it catches the error and states that the user has already joined the competition. This execute also increases the number of participants inside the competition table.</li>
<li>The code then updates the credits that the user has through a query, prepare, and execute using the User's id and the end credits variable created earlier.</li>

</ul>

__SubTask 5:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/46

</ul> 

__SubTask 6:__ Add a direct link to NJIT's webserver prod for this file (any join page)

<ul>

#### Required url pattern: https?://web.njit.edu/~.+-prod/*

> URL(s): https://web.njit.edu/~mws36/mws36-prod/Project/viewCompetitions.php

</ul></ul>


### Deliverable 9: Create a function to calculate winners (pts. 1.25)
<ul>

__SubTask 1:__ Add a **screenshots** of the whole code process with the clear comments (ensure your ucid and date are shown)

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | May need multiple screenshots |
| [ ] #2  | 1      | Clearly caption them |
| [ ] #3  | 1      | Ensure your ucid and date are shown |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s): Unable to complete due to time constraints, will explain what I believe the process to be during the demo and below.

</ul>

__SubTask 2:__ Mention which winner calculation you chose (copy the text from the proposal for your choice)

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Text should be copied from the proposal |
| [ ] #2  | 1      | Should clearly mention if it's option 1 or 2 |
<br>
  
> Explanation: Option 2: Where the individual score was earned/created between 
when the user joined the competition and when the Competition 
expires 


</ul>

__SubTask 3:__ Add before and after **screenshots** of the Competitions table of valid and invalid competitions being successfully processed

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Clearly label which is before and after |
| [ ] #2  | 1      | Clearly mention which record to look at |
<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s):  Unable to complete due to time constraints, will explain what I believe the process to be during the demo and below.

</ul>

__SubTask 4:__ Briefly explain the calculation steps and payout process.

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | If comments in code are clear you may copy/paste those |
| [ ] #2  | 1      | Recommended to use a list |
<br>

> Explanation:   I believe that the way to implement this feature would be to create a calculate button on the ViewCompetitions homepage that would begin the process, or on page startup would begin the calculations. Each of these would result in a SQL query statement looking for any competitions that would grab competitions that are beyond the expiration date,have not paid out, and have the minimum required participants. For each of these Competitions, another SQL statement would grab the relevent participants using the CompID in the CompetitionsParticipant Table. Another for loop would then take place, going through each competition participant, taking their top score that was taken since after they joined the competition(possible by looking through the created timestamp on the record), and comparing it to each other user's highest score through the use of if/else statements. The highest score would be granted first place and so forth. Once the calculation has been finished, it would then take the currentReward record and multiply it by the percentages given when the original user created the competition. Next it would update each winner's credits by a similar process used when credits were removed when they joined the competition. Finally it would update the paidOut record on the original competition to indicate that the competition is over and so it doesn't accidently pay out multiple times. 
    
I believe that this would be possible to implement given another day where I would be able to focus solely upon it, sadly this is impossible during finals season and I had to make the decision to cut it early, even if it is a core feature, due to it relying on everything else to be functioning properly. 

</ul>

__SubTask 5:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): Deliverable is not complete, so there is no pull request.

</ul></ul>

### Deliverable 10: Misc (pts. 1)
<ul>

__SubTask 1:__ Add **screenshots** showing which issues are done/closed (project board)

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Incomplete Milestone2 Issues should not be closed |
| [ ] #2  | 1      | Should be from project board |
| [ ] #3  | 0      | May require multiple images |
| [ ] #4  | 1      | In the caption briefly explain any incomplete items |

<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s):![Project2](https://user-images.githubusercontent.com/113381682/208278257-d092ce5d-1734-4193-a7ff-0ed06de95cab.PNG)
![Project1](https://user-images.githubusercontent.com/113381682/208278258-afcbc4d8-c2f8-4385-9b87-6f2d6f008e1e.PNG)
The Project Dashboard showing all the done and incomplete issues.
Credit History Table Implementation is in progress because it exists, but theres no actual implementation to add data to it, that may be simple to implement, but it was uneeded for the program and Instructor said it may be skipped.
Payout Method is in progress because of time constraints. Despite being an important feature for the use of competitions, I simply do not have enough time to implement the function and bugfix it within the time constraints provided due to finals. I explained how I believe I can implement it ealier aswell as the time I believe I would need. 
</ul></ul>