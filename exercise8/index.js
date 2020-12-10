const express = require("express");
const app = express();
const bodyParser = require('body-parser');
const validate = require('./validate');
const session = require('express-session');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended:true}));
app.set('view engine', 'ejs');

//use session
app.use(session({
    secret: "This is a secret",
    resave: true,
    saveUninitialized: false
}))

//register middleware
const registermiddleware = (req, res, next)=> {
    let data = req.body;
    const {error,result} = validate.RegisterSchema.validate(data);
    if(error){
        res.render('register.ejs',{errors: error.details});
    }else {
        req.session.user = data;
        next();
    }
}   

//login middleware
const loginMiddleware = (req, res, next)=> {
    let data = req.body;
    let user = req.session.user;
    const{error, result} = validate.LoginSchema.validate()
    if(error){
        res.render('login.ejs',{errors: error.details});
    }else {
        //check if the password and the email match
        if(user.email != data.email || user.password != data.password){
            res.render("login.ejs", {errors: [{message: "Credential mismatch!"}]});
        }else {
            next();
        }
    }
}

//get register
app.get('/',(req,res)=> {
    res.render('register.ejs');
} )

//get bio
app.get('/bio', (req, res)=> {
    res.render('bio.ejs',{user: req.session.user});
})

//get login 
app.get('/login', (req, res)=> {
    res.render('login');
})

//get register page
app.get('/getregister', (req, res) =>{
    res.render('register');
})

//post register
app.post('/register', registermiddleware,(req, res)=> {
    res.redirect('/login');
});

//post login
app.post('/login', loginMiddleware,(req, res)=> {
    res.redirect('/bio');
})
app.listen(5000, console.log('Server running in port 5000'));