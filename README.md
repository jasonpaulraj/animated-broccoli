# 

PHP Requirement : 7.0+
## 
1. Navigate to project root via terminal. 
2. Run command : 
```bash
php -f script.php
```
### Program Test
Running the command does the following things in order:-
1. Test Program with temporary text for issues  - Exits the program if one or more test modules have issues. 
2. If Program test is successful, generated csv files are destroyed & user will be required to input a string of text for processing.

### Program 
1. Text input converted to uppercase via 
``` uppercase.php ```
2. Text input converted to alternating characters of uppercase & lowercase via 
``` alternating_text.php ```
3. Text input converted to csv with one character for each column & placed in download folder in root directory via 
``` generate_csv.php ```
