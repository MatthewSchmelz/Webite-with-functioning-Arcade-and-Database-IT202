ALTER TABLE User ADD COLUMN Credits int 
not null  default (5) 
COMMENT 'Credits default to 5 for a new user.';