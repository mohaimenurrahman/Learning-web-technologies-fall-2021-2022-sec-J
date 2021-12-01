"use strict"
$(document).ready(function() {
$("#basic-form").validate({
rules: {
name : {
required: true,
minlength: 3
},

email: {
required: true,
email: true
},
gender: {
required: true,
gender: true
},
date: {
required: true,
date: true
},
group: {
required: true,
group: true
},
degree: {
required: true,
degree: true
},
photo: {
required: true,
photo: true
},

messages : {
name: {
minlength: "Name should be at least 3 characters"
},
email: {
email: "The email should be in the format: abc@domain.tld"
},
gender: {
required: "Please enter your gender",
gender:"select one - male/female/others"
},
date: {
required: "Please enter your birth  date",
gender:"provide valid date: 12/12/2021"
},

group: {
required: "Please enter your blood group",
group:"provide valid date: 12/12/2021"
},

degree: {
required: "Please enter your degree",
degree:"provide one"
},

photo: {
required: "Please enter your photo",
photo:"provide own photo"
},



}



});
});