# Assignment 4 - Chicago 

Github: https://github.com/SidhantAl/Assignment4-Chicago/

Website: http://www.urcsc174.org/assignment04/Chicago/

Database: urcscon3_chicag

*Design inspired from https://www.ybrikman.com/*

#### Team 

Sidhant Ahluwalia - Information Architect 

Hnin Oo Wai @ May - Designer

Louis Fusilli - Coder 


## IA 

#### Content

##### Ontology

All 4 students are attending the University of Rochester, all are dual majors and are currently taking Advanced Front-End Development. This will be shown by sharing the same page design and section placement on the page. 

##### Difference

One student is a girl, her majors are CS and Psychology  

The student that is different will have a different color scheme (lighter) on the page, with more emphasis on the differences. The tab for this student will also be colored differently to strike a difference between the other students.

##### Choreography

The description of the students follows general information (summary), Academic experience and Work experience. The tabs on the navigation bar are last names of the students in ascending order apart from the home page.


#### Layout

The general information will contain in a section tag and will be center aligned below a picture on top of the article and aside tags. 

The home page will contain center aligned pictures of the 4 students with a brief 2 sentence description of their background. In addition to this, the home page will contain information about the website and inform users about the form.

The individual pages will contain an aside and an article tag, the aside tag will contain the Work Experience and will be positioned to the right of the page. While the article tag will be on the left-hand side of the page, containing the Academic Experience. 


#### Typefaces and Fonts 

H1 tags for the content, titles and names should be styled in a large, bold and highly legible font

H2 tags are to be used for subtitles and should be in italics for a more subtle look to the page. In addition to this, subtitles should be in a dark grey color.

P and regular content tags should be a thin font with adequate spacing in a dark color to be easy to read. 

*Background color changes to a light shade or white, depending on the designers preference*

#### Form

There will be a left aligned header on the form saying "Tell us about yourself", the input elements will follow below the header with adequate spacing between themselves.  

The form will contain 5 elements 

- Name (text input)
- Major 1 (text input)
- Major 2 (text input) - the user can put N/A if not applicable
- Class year (numeric input)
- Gender - Male/Female (radio button)

A submit button to add details to the database and present a table with all the content of the form to the user.

The table will contain 6 columns (number, name, major1, major2, class year and gender) and the rows will depend on the number of submissions on the form.


#### Next Steps 

- Designer will select a font and implement the design of the webpages with help from the coder. 
- Coder will set up the database and the form with help from the AI and Designer
- AI will check to see that the website follows the desired outlook, coordinating with the Designer and Coder 

## Designer

1) Based on the instructions of IA, the main theme of the website is to showcase the difference between three girls and one boy. To emphsis this gender difference, the following design decisions are made:

  - the hero background images and the hover and active nav items for the girls are chosen as light pink color where as blue is chosen       for the boy.
  - the flower pattern in the hero background represents the girl and the gaming icon represent the male stereotypes of gamers.

2) C.R.A.P principles usage:

  - Contrast: text color is changed to white to make it stood out when hovered; the seconding level headings are styled into italic to make it stood out from the paragraph; the same reasoning applies to making the name h1 super bold to have a strong appearance and the nav bar fonts are all capitalized to catch the reader's eyes in the first place. 
  - Repetition: white background is used repeatedly as a theme in the nav bar and the background color of the main body text to tie the elements together in clear unity; the same pink color theme is used in the same way for all three girls to identity them as one group.
  - Alignment: The name and majors are centered in the upper-middle of the view port to draw reader's attention in the first place. Following this is the general information that span across the page and then the academic experience and work experience that breaks the monotony of the page by putting it side to side. 
  - Proximity: putting the general information, academic and work experience together in one container ties them together as a group giving more information of the student. The same applies for nav bar having items next to each other so that user can easily navigate across the pages. 

3) Typeface and fontchoices:

  - Open Sans is used for H1 and H2 as the kerning between the font improves the readablity of the text and makes the user grasps the information easily. 
  - H1 is bolded to 800 to catch the reader's first attention by leaving strong expression and H2 is styled into italic to make it stood out from the paragraph.
  - Merriweather is used for the 'p' as the serif in the font enables the reader to glide easily across the words without much confusion. This is further supported by increasing the line-height and letter-spacing. 
  
 4) Layout Implementation:
 
 - Bootstrap framework is used to style the layout. 
 - The nav bar is position fixed at the top of the page and footer has its own position at the bottom of the page.
 - Following the nav bar is the hero class that acts as the main eye-catcher.
 - The main body text of general information and the work and academic experience are put into two separate rows. The latter row contains two columns divided half/half across the page using the bootstrap col-sm-6 properties. 
 
## Coder

### Validation Errors
Due to the use of php includes on the site, the main HTML files are missing their doctype declarations, causing the W3C validator to only look for correct markup syntax. This causes an issue with the use of the &copy; symbol used throughout the pages.



