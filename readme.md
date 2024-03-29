# Color Survey for Machine Learning Experiment

<img alt="preview" src="./public/images/preview.PNG" width="160" align="center"/>

## About the Color Survey

Submit entries using the Color Survey to help create data for a machine learning experiment. Go to 
<a href="http://colorsurvey.xyz" target="_blank">www.colorsurvey.xyz</a> to submit an entries. See how the data is used to train a front-end machine learning model to classify colors in an Angular application at a Denver area meetup in Fall 2019 (check back soon for date and location).

#### Technologies used for the survey:
* Laravel
* PHP
* MySQL
* AWS EBS, RDS, & EC2
* GitHub
       
## How it works

The survey randomly generates an "R, G, B" value, then displays its corresponding color on the screen. The user will then click the button that best describes the color. The "R, G, B" value and user selected label are logged to a database in a format that looks something like this...

```javascript
var surveyData = [
    {
        label: green-ish,
        r: 61,
        g: 106,
        b: 17
    },
    {
        label: yellow-ish,
        r: 225,
        g: 220,
        b: 21
    },
    {
        label: pink-ish,
        r: 194,
        g: 34,
        b: 138
    }
]
```
        
### Inspired By:
<a href="https://thecodingtrain.com/" target="_blank">The Coding Train</a>

## Created By:
<a href="https://connorjaksik.com" target="_blank">Connor Jaksik</a>
