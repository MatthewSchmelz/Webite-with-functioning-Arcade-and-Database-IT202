# IT202 Milestone2 Arcade Project (pts. 10.00)
## Instructions
1. Checkout Milestone2 branch
2. Create a milestone2.md file in your Project folder
3. git add/commit/push this empty file to Milestone2 branch (you'll need the link later)
4. Fill in the deliverable items
5. At the end copy the markdown and paste it into milestone2.md
6. git add/commit/push the md file to Milestone2
7. Do a Pull Request on GitHub between Milestone2 and dev. Then verify.
8. Do a Pull Request from dev to prod. Then verify.
9. Checkout dev locally and pull changes to get ready for Milestone 3.
10. Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas.
Note: Ensure all images appear properly on GitHub and everywhere else. Images are only accepted from dev or prod branches. All website links must be from NJIT's webserver from the prod URL. (you can assume/infer this by getting your dev URL and changing dev to prod).
## Desired Branch Name
### Milestone 2
## Deliverables
---
### Deliverable 1: Pick a game... (pts. 1.75)
<ul>

__SubTask 1:__ What game will you be doing?

<ul>

> Explanation:  A rage game version of pong.

</ul>

__SubTask 2:__ Briefly describe it and its mechanics

<ul>

> Explanation:  Pong, but with added effects to make the game more frustrating to play. There are percent random changes that the ball will go in differing directions then one would think, keeping the player on their toes. There is also a small chance that the paddles will move in the opposite direction then what is intended by the player, forcing a tapping playstyle. Once the AI gets five points, the game is over.

</ul>

__SubTask 3:__ Add **screenshot** showing something of the game

<ul>

#### Make sure if the  **screenshot**  contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![pong](https://user-images.githubusercontent.com/113381682/207083398-319b82b4-1390-4916-88e7-91d572d0036a.PNG)

</ul>

__SubTask 4:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/38

</ul>

__SubTask 5:__ Add a direct link to the NJIT webserver prod URL

<ul>

#### Required url pattern: https?://web.njit.edu/~.+-prod/*

> URL(s): https://web.njit.edu/~mws36/mws36-prod/Project/angry_pong.php

</ul></ul>

### Deliverable 2: Saving Score (pts. 2)
<ul>

__SubTask 1:__ Add a **screenshot** showing a notice telling the user their score was saved

<ul>

#### Make sure if the  **screenshot**  contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot: ![score saved](https://user-images.githubusercontent.com/113381682/207087651-fa6397b9-331c-4b9a-9558-c58521aac1ce.PNG)


</ul>

__SubTask 2:__ Add a **screenshot** showing your scores table with some score entries

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Should contain different users' scores |
| [ ] #2  | 1      | Should contain a few samples |

<br>

### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:   ![scor](https://user-images.githubusercontent.com/113381682/207086102-4334a607-8762-4976-b953-6a329b6fb54f.PNG)


</ul>

__SubTask 3:__ Briefly describe the code flow of saving a score from the game

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details        |
| ------- | ------ | --------------:|
| [ ] #1  | 1      | Clearly mention which score option you chose for this feature (copy the text from the proposal doc and paste it in the text area) |
| [ ] #2  | 1      | Clearly mention each high level and logical step that gets the score to persist in the db starting from the game logic |
<br>

> Explanation:  Due to not being able to work with backend easily and the major time constraints, the score cannot update passively, instead it acts like a form where the user inputs their score. After they lose the game, they put in their score and it will be saved into the database. The 'Scores' Database takes three parameters, apart from the Primary ID. If the user is logged in it takes their USER ID, if they aren't that field will be NULL, but will still be used for leaderboards (Anonymous Scores are common in gaming). It takes the score the user entered, and the date/time it was created, which is also used soon in the leaderboards.

</ul>

__SubTask 4:__ Add the related pull request link(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/38

</ul></ul>

### Deliverable 3: User's last 10 scores (pts. 1.75)
<ul>

__SubTask 1:__ Add a **screenshot** showing the latest scores for the user from their profile page. Show at least a few scores.

<ul>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:  ![last10](https://user-images.githubusercontent.com/113381682/207087964-35157781-a76b-474f-a8a3-b939bc3c1bbc.PNG)
97b9-331c-4b9a-9558-c58521aac1ce.PNG)

</ul>

__SubTask 2:__ Briefly explain how the scores are being pulled and displayed. Include all high level stops of the process from page load to database.

<ul>

> Explanation:  The way the scores are being pulled is extremely simple, first I assigned the current user ID to a variable, and did a SELECT WHERE statement on the SQL where the UserID on the Scores table was equivilent to the variable. Underneath that in the code, we pulled out the specific parameters needed for showing the score, namely the score and last date it was modified(Not created incase it was changed via external input afterwards). This is a modified version of what was done for the listroles page. 

</ul>

__SubTask 3:__ Add the related pull request link(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/38

</ul> 


__SubTask 4:__ Add a direct link to NJIT's webserver prod for this file

<ul>

#### Required url pattern: https?://web.njit.edu/~.+-prod/*

> URL(s): https://web.njit.edu/~mws36/mws36-prod/Project/profile.php

</ul></ul>

### Deliverable 4: Create function(s) for outputiting the 3 different scoreboard durations (weekly, monthly, lifetime) (pts. 1.75)
<ul>

__SubTask 1:__ Add one or more **screenshots** showing the function(s)

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Each function should be clear                            |
| [ ] #2  | 1      | Each snippet should show ucid and date of when the code was added (as a comment) |

<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot(s):![querey](https://user-images.githubusercontent.com/113381682/207089962-d8ac9991-dba8-44e2-ab11-0f4d4ed844b9.PNG)


</ul>

__SubTask 2:__ Explain the process of how the code works

<ul>

> Explanation: A simple select from the SQL table that searches for entries within a given time frame, for this one, the yearly one
its 365 days. Underneath it, but not shown in the screenshot are buttons for yearly/monthly/weekly leaderboards which takes you to an identical home page except for the SQL statement having a different time constraint, 7 days for weekly, 31 for Monthly. I also added a limit of 100 to the
Leaderboards, just in case there are a lot and having every score isn't conductive to the page if it gets large enough.

</ul>

__SubTask 3:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/38

</ul></ul>

### Deliverable 5: Home Page (pts. 1.75)
<ul>

__SubTask 1:__ Add a **screenshot** showing the scoreboads, the link to the game and description, and the proper heading

<ul>

#### The checkboxes are for your own tracking
    
|    #    | Points | Details                                                  |
| ------- | ------ | --------------------------------------------------------:|
| [ ] #1  | 1      | Should have proper heading |
| [ ] #2  | 1      | Should show daily, weekly, and monthly scoreboards |
| [ ] #3  | 1      | Should have a description of the game |
| [ ] #4  | 1      | Should have a link to the game that's separate from any navbar link |

<br>

#### Make sure if the **screenshot** contains code that you have a relevant comment with your ucid, date, and explanation of what you're attempting, if not max grade for this item is 75%.
#### Provide a Github URL to each **screenshot** you've uploaded with a caption
> Screenshot:   ![Rage](https://user-images.githubusercontent.com/113381682/207090725-36ab94c2-7693-432a-bed4-5cd0dea2f0bf.PNG)


</ul>


__SubTask 2:__ Briefly explain how the different pieces are retrieved and shown to the user

<ul>

> Explanation:   The Navigation bar is pulled from Nav.php, and the heading for the home page was there already. I used a list to put in the
Rage Pong link to make it stand out better, with some regular text beneath the game where there is a summary of the game. I used the header font we used for the Home text for the leaderboards. The Links are simply placed below the Leaderboard text, and the leaderboard itself is pulled from the Scores database and presented like how shown earlier. 

</ul>

__SubTask 3:__ Add the related pull request(s)

<ul>

#### Required url pattern: https?://github.com/(?:[^/.]+/)+(?:pull/.+)

> URL(s): https://github.com/MatthewSchmelz/IT202-007/pull/38

</ul> 

__SubTask 4:__ Add a direct link to NJIT's webserver prod for this file

<ul>

#### Required url pattern: https?://web.njit.edu/~.+-prod/*

> URL(s): https://web.njit.edu/~mws36/mws36-prod/Project/home.php

</ul></ul>

### Deliverable 6: Misc (pts. 1)
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
> Screenshot(s):

</ul>

__SubTask 2:__ Add a link to your NJIT webserver prod projects login page

<ul>

#### Required url pattern: https?://web.njit.edu/.+-prod.*

> URL: https://web.njit.edu/~mws36/mws36-prod/Project/login.php

</ul></ul>