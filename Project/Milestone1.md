# Milestone1 Deliverable (pts. 10.00)
## Instructions
1. Checkout Milestone1 branch
2. Create a milestone1.md file in your Project folder
3. Git add/commit/push this empty file to Milestone1 (you'll need the link later)
4. Fill in the deliverable items
5. Ensure your images display correctly in the sample markdown at the bottom
    - NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.
6. Save the submission items
7. Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button
8. Paste the code into the milestone1.md file or overwrite the file
9. Git add/commit/push the md file to Milestone1
10. Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)
11. Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)
    - Make sure everything looks ok on NJIT's webserver dev
12. Make a pull request from dev to prod (resolve any conflicts)
    - Make sure everything looks ok on NJIT's webserver prod
13. Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)
## Desired Branch Name
### Milestone 1
## Deliverables
---
### Deliverable 1: Feature: User will be able to register a new account (pts. 1)
<ul>

__SubTask 1:__ Add one or more **screenshots** of the application showing the form and validation errors per the feature requirements

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Show invalid email validation |
| [ ] #2  | 1      | Show invalid password validation |
| [ ] #3  | 1      | Show passwords not much validation |
| [ ] #4  | 1      | Show email not available validation (already registered) |
| [ ] #5  | 1      | Show Login Name not available validation (logName is taken) |
| [ ] #6  | 1      | Show the form with valid data filled in before the form is submitted |

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> #1:
[noemail](https://user-images.githubusercontent.com/113381682/204358594-3c576b5e-da03-4746-a798-fdf25e339658.PNG)
Shows invalid email validation
> #2: 
![bademail](https://user-images.githubusercontent.com/113381682/204359116-785209db-e9b3-4588-98b7-76c62e4a648d.PNG)
Shows invalid password validation
> #3:
![passnomatch](https://user-images.githubusercontent.com/113381682/204359310-2b9d4a24-47d3-4af8-9f2e-e615fdabccb6.PNG) 
Shows passwords not matching validation
> #4: 
![sameemail](https://user-images.githubusercontent.com/113381682/204359435-5a073428-0fa9-45d2-8b8a-4e274025dea6.PNG)
Shows email not available validation (already registered)
> #5: 
![samelog](https://user-images.githubusercontent.com/113381682/204359688-6dc8a91b-d70f-4ee0-bfff-1b6a89321d19.PNG)
Shows the logname is used, has same error message as email
> #6: 
![newuser](https://user-images.githubusercontent.com/113381682/204359954-0169d657-e02f-4464-855a-90826bb381e1.PNG)
All the info for a new user, provided correcly

</ul>

__SubTask 2:__ Add **screenshot** of the User table with data in it. The valid user data from Task 1 should be present in this **screenshot**. Clearly highlight which row it is.


<ul>

#### Make sure if the  **screenshot**  contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![usertable](https://user-images.githubusercontent.com/113381682/204360316-40567b32-d393-4802-9063-d0d862e8d8c4.PNG)
Is the user-table, user from previous deliverable is highlighted blue

</ul>

__SubTask 3:__ Add the related pull request(s) for this feature

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/31

</ul> 

__SubTask 4:__ Explain briefly how the process/code works (to register)

<ul>

#### The checkboxes are for your own tracking
     
|    #     | Points | Details                                                  |
| -------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1       | Explain how the form is handled and behaves             |
| [ ] #2  | 1       | Explain the validation logic (frontend and backend)     |
| [ ] #3  | 1       | Explain how the password is handled                     |
| [ ] #4  | 1       | Explain how the DB is utilized                          |

> #1:  The Register form is quite simple, at the simpliest level it completes two tasks. It ensures that the 
    information ented into each of the boxes is filled out correctly(Email is an actual email, password complies with parameters, and that nothing is empty). It also checks to see if this user is already registered.

> #2:  The validation logic is quite simple, the first logic statements confirms that all the gathered information on the form is put in correctly, if any of them arent, the program shows the user the corresponding error message, telling them the problem so that they can fix it. After this is all finished, it encrypts the password so Admins and users cannot see it. Finally the second logic statement attempts to put all this info into the database for later use, if the user already exists however, it catches the error and informs the user with an error.

> #3:  The password is handled quite simply, first the program checks to ensure the password isn't too long or short, and that it matches the confirm password. If these two criteria are met it encrypts the password and is added to the database with the rest of the info on a successful register.

> #4: The database is only utilized at the end of the register program, where it is checked to see if the user attempting to register already exists, if it does, the corresponding logic statement fails and an error is shown. If the user does not exist in the database, it is then updated with the new user.

</ul></ul>

### Deliverable 2: Feature: User will be able to login to their account (pts. 1)
<ul>

__SubTask 1:__ Add one or more **screenshots** of the application showing the form and
validation errors per the feature requirements

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Show password mismatch validation (doesn't match what's in the DB) |
| [ ] #2  | 1      | Show validation based on non-existing user |

<br>Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> #1: ![invalidpass](https://user-images.githubusercontent.com/113381682/204605237-94b5caa8-32d4-4b82-bb5b-5993e72793e7.PNG)
Error that appears when the password is incorrect
 

> #2: ![user doesnt exist](https://user-images.githubusercontent.com/113381682/204605200-b0392b76-9bd1-4c3d-aa46-489a92d688d3.PNG)
Error that appears when the user hasn't been registered

</ul>

__SubTask 2:__ Add a **screenshot** of successful login

<ul>

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  


</ul>

__SubTask 3:__ Add the related pull request(s) for this feature

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): Latest Pull request already submitted, as per asked

</ul> 

__SubTask 4:__ Explain briefly how the process/code works (to login)

<ul>

#### The checkboxes are for your own tracking
     
|    #     | Points | Details                                                  |
| -------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1       | Explain how the form is handled and behaves             |
| [ ] #2  | 1       | Explain the validation logic (frontend and backend)     |
| [ ] #3  | 1       | Explain how the password is handled                     |
| [ ] #4  | 1       | Explain how the DB is utilized                          |

> #1:  As per all the forms, it checks to see if all the info provided is put in correctly via sanitzers, if put in incorrectly it responds with the correlating error like the register code. If they successfully log in, the form moves them to the home page and shows a successfully logged in display.

> #2:  The amount of logic statements in the login code are plentiful, but it all comes down to simply verifying the identity of the user. It fetches the email from the database if the user exists, and then checks to see if the password given matches with the hashed password that was placed when registering. If this all works out, the code then fetches the roles the user has and displays a welcome message.

> #3:   First the hashed password from the corresponding user is applied to the $hash variable and then unset. Then the password given via the form is compared to the hashed password. If they match, the user is logged in. If not, it displays an error.

> #4: The database is utilized three times in this program. After itilaized, it is used for the first time to ensure the email is in the database(so we know the user is registered), a second time to grab the encrypted password from the user(whose email we just grabbed), and a third time(if the user logs in successfully), to grab all the roles that the user has. 

</ul></ul>
 
### Deliverable 3: Feature: Users will be able to logout (pts. 1)
<ul>

__SubTask 1:__ Add a **screenshot** showing the successful logout message. Message should show something about being logged out

<ul>

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![logout](https://user-images.githubusercontent.com/113381682/204614109-924aecc3-9167-4db5-bcb1-6fb7c087b719.PNG)
logged out with "successfully logged out" message

</ul>

__SubTask 2:__ Add a **screenshot** showing the logged out user can't access a login-protected page. Message should show something about not being logged in

<ul>

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![logout](https://user-images.githubusercontent.com/113381682/204614109-924aecc3-9167-4db5-bcb1-6fb7c087b719.PNG)
Logged out user cant go to anywhere but login/register, and if they attempt to use the url to navigate to a page like profile, it puts them back at the login page, though I cant show that as a screenshot.


</ul>

__SubTask 3:__ Add the related pull request(s) for this feature

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): Latest Pull request already submitted, as per asked

</ul> 

__SubTask 4:__ Explain briefly how the process/code works. Describe the session logic and how it's used for login

<ul>

> Explanation:  Sessions are what keeps you logged in when you go from page to page, everyone's session keeps their user info so that they can navigate the site without having to log into each page. What logout does is reset the session, which is a function in our functions list. What it does is unset your session(removes it so you cant hop to another page), destroys the current session, and then resets it, so you will have the setting a new user would have when they first log in. 

</ul></ul>

### Deliverable 4: Feature: Basic Security Rules and Roles Implemented (pts. 1)
<ul>

__SubTask 1:__ Add a **screenshot** showing the logged out user can't access a login-protected page (may be the same as similar request). Message should show something about not being logged in

<ul>

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  Same screenshot as before, since its the same prompt.

</ul>

__SubTask 2:__ Add a **screenshot** showing a user without an appropriate role can't access the role-protected page. Message should show something about not having proper role or permission (i.e., different than the not logged in message)

<ul>

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![usercannot](https://user-images.githubusercontent.com/113381682/204617927-5a63a6ee-76f5-4c45-b27d-da37272a6bef.PNG)
user cannot see the admin pages if they do not have the role. 
![permiss](https://user-images.githubusercontent.com/113381682/204618237-5d3255b2-4c35-4b12-a8a9-7b33240aa832.PNG)
If the user attempts to visit it via URL, it states this message.


</ul>

__SubTask 3:__ Add a **screenshot** showing of the Roles table with valid data. Must have at least one valid record from the lessons (i.e., Admin)

<ul>

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![roles](https://user-images.githubusercontent.com/113381682/204618391-3b62f04a-c402-4ae5-ab3e-90b2f0728e44.PNG)

Admin is the only role I have created.


</ul>

__SubTask 4:__ Add a **screenshot** showing the UserRole table with valid data. Caption which is your administrator

<ul>

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![userroles](https://user-images.githubusercontent.com/113381682/204618593-b8c7dba3-46a5-496d-8dc6-acf99ce3eff8.PNG)

UserID 7 is my Administrator.


</ul>

__SubTask 5:__ Add the related pull request(s) for this feature

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): Same Pull request as previous

</ul> 

__SubTask 6:__ Explain briefly how the process/code works for login-protected pages. Explain how the session is used and any relevant helpers

<ul>

> Explanation:  The process for login protected pages is very simple, at the begining of the code, we call the is_logged_in() function from our helper function, which checks to see if we are a user, if we are it allows us into the page, if not we are booted back to login. The nav works smimilarly, but instead of allowing us onto the page, it gives us the new links to the page on the nav bar.

</ul>

__SubTask 7:__ Explain briefly how the process/code works for role-protected pages. Explain how the session is used and any relevant helpers

<ul>

> Explanation:  The process for role protected pages is very simple, at the begining of the code, we call the has_role("admin") function from our helper function, which checks to see if we have the admin role, if we are it allows us into the page, if not we are booted back to the home page. The nav works smimilarly, but instead of allowing us onto the page, it gives us the new links to the page on the nav bar.


</ul></ul>

### Deliverable 5: Feature: Site should have basic styles/theme applied; everything should be styled (pts. 1)
<ul>

__SubTask 1:__ Add a **screenshot** showing the successful logout message

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Navigation should be styled |
| [ ] #2  | 1      | Forms should be styled |
| [ ] #3  | 1      | UI should be clean and not have my "hideous" example CSS |
| [ ] #4  | 1      | Data output should be in a clean manner (i.e., table, row/cols, list groups, etc).<br>Basically not exactly like dumped plaintext |

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> #1:  ![css2](https://user-images.githubusercontent.com/113381682/204634226-04210c91-cbac-4363-8d70-80b5c3e0f399.PNG)
Screenshot shows
1.Navigation has a new background and a white font that makes it easy to read
2. Forms have a  new color that is also easy to read,unlike the purple text on pink background
3. I think the form looks clean? Nothing overlaps and I think its plenty readable.
4. While I only have one role, its easy to see how all the data would line up underneath each other should I add extra. 

</ul>

__SubTask 2:__ Add the related pull request(s) for this feature

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): Pull request at top as requested

</ul> 

__SubTask 3:__ Briefly explain your CSS at a high level. Highlight the basic styling you chose for the general elements like nav, forms, etc.

<ul>

> Explanation:   I turned the ovals into rectangles for readability. As for the general elements, I set the background of the nav section to black to show that it was different from the rest of the text on the page. The text for the forms had their text colors changed to black for better readability then the purple on pink clash that the 'horrible' styling had.

</ul>

### Deliverable 6: Feature: Any output messages/errors should be "user friendly" (pts. 1)
<ul>

__SubTask 1:__ Add **screenshots** showing of some examples of errors/messages

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | This can include previous screenshots of protected pages and/or validation messages. |
| [ ] #2  | 1      | Show at least 3 different "error" messages |

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> #1: ![invalidpass](https://user-images.githubusercontent.com/113381682/204605237-94b5caa8-32d4-4b82-bb5b-5993e72793e7.PNG)
Invalid password screenshot from before that highlights a user friendly error
> #2:  ![noemail](https://user-images.githubusercontent.com/113381682/204358594-3c576b5e-da03-4746-a798-fdf25e339658.PNG)
No email screenshot from before that highlights a different user friendly error
</ul>

__SubTask 2:__ Add a related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): Pull request at the beggining, as per request

</ul> 

__SubTask 3:__ Explain briefly how you made messages user friendly. Describe what we've been doing to handle techical messages and converting them to being friendly to our users


<ul>

> Explanation:  
I made user messages friendly by having them be plain readable text, unlike the 4 line long error message we recieve when attempting to debug. User error messages easily highlight the problem, and offer solutions for the problem when possible(Such as the second screenshot saying exactly what is needed in the required field). The main way we have been doing this is by using if statements to catch oncoming errors and use a friendly way(such as flash messaging), to convey that error to the user.

</ul></ul>

### Deliverable 7: Feature: Users will be able to see their profile (pts. 1)
<>

__SubTask 1:__ Add a **screenshot** showing the successful logout message. Email and Login Name should prefill properly.

<ul>

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  Going to assume typo with the subtask since the task is talking about the profile. Aswell as email and login name not being something that can both be shown on the logout page
![profile](https://user-images.githubusercontent.com/113381682/204629832-51b9c88f-f203-487d-8d51-351728d4b69e.PNG)
Shows the profile tab with user info filled in

</ul>

__SubTask 2:__ Add the related pull request(s) for this feature

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): Same Pull request

</ul>

__SubTask 3:__ Explain briefly how the process/code works (view only). Only talk about how the data is retrieved about the user and displayed in the form

<ul>

> Explanation: The way data is retrived from the user and brought into the form is by taking both the $email and $logName variables from the user's current session and placing it in the form

</ul></ul>

### Deliverable 8: Feature: User will be able to edit their profile (pts. 1)
<ul>

__SubTask 1:__ Add **screenshots** of the User Profile page validation messages and success messages

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Show Login Name validation message          |
| [ ] #2  | 1      | Show email validation message               |
| [ ] #3  | 1      | Show password validation message            |
| [ ] #4  | 1      | Show password mismatch message              |
| [ ] #5  | 1      | Show email/Login Name already in use message  |

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> #1:  ![newlog](https://user-images.githubusercontent.com/113381682/204632713-f5a17ee7-d028-43c2-8fb6-d05782bb937b.PNG)
Updated the login name

> #2:  
![newemail](https://user-images.githubusercontent.com/113381682/204632724-1564f22c-e6e8-4fb1-8fd7-80625edce3c2.PNG)
Updated the email

> #3:  ![newpass](https://user-images.githubusercontent.com/113381682/204632742-83806dd7-5886-4a64-9b35-698f607cdfa6.PNG)
updated the password

> #4:  ![invalidpassw](https://user-images.githubusercontent.com/113381682/204634389-d603735e-7908-489e-ba37-13a487ed23c3.PNG)
password givn is incorrect

> #5:  
![duplog](https://user-images.githubusercontent.com/113381682/204635300-f838a8b3-641f-4bec-9422-9e2bb69f4afe.PNG)
Duplicate login name, though the flash message wouldn't work, it still does not allow you to choose the loginname.

</ul>

__SubTask 2:__ Add before and after **screenshots** showing the User table when a user edits their profile

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | There should be two screenshots          |
| [ ] #2  | 1      | It should be highlighted or note which record changes <br>between both screenshots along with what changed |

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> #1:  
![alpha](https://user-images.githubusercontent.com/113381682/204635794-90e00f71-ecb1-4e8e-81e8-a21a005e9965.PNG)
Before I updated ID 7

> #2:![beta](https://user-images.githubusercontent.com/113381682/204635805-18213967-0bd3-4d3d-8770-eaa5f47ae9ca.PNG)
After I updated ID 7's email

</ul>

__SubTask 3:__ Add the related pull request(s) for this feature

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): Pull request at beginning

</ul> 

__SubTask 4:__ Explain briefly how the process/code works (edit only). Talk about how the edit logic is handled for updating email, logName, and password (don't forget to briefly mention the validation)


<ul>

> Explanation: Updating LogName and Email are handled the same way since they are the only two parameters that have to stay unique.What the program does is it just attempts to brute force update the database with a try/except logic statement to handle any errors. If there was any errors, the exception logic statement is used where it sends back an error message. For updating passwords, first it needs to verify the password, which it does the same way a password is verified for Login, once that is verified, it double checks the password and confirmed password much in the same way register does it, and then it updates the database. 

</ul></ul>

### Deliverable 9: Issues and Project Board (pts. 2)
<ul>

__SubTask 1:__ Add **screenshots** showing which issues are done/closed (project board)
Incomplete Issues should not be closed

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | At least one issue item per Milestone feature |
| [ ] #2  | 1      | Show from the Project Board perspective (may need multiple screenshots) |

Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> #1:  

> #2:  

</ul>

__SubTask 2:__ Include a direct link to your Project Board. URL should end in /project/# (likely 1, but the number isn't important)

<ul>

> URL:  

</ul>

__SubTask 3:__ Prod Application Link to Login Page. Link must be from the NJIT webserver prod folder to your application's login

<ul>

#### Required url pattern: https?://web.njit.edu/.+-prod.*

> URL: 

</ul> </ul>
