const Joi = require('joi');

const RegisterSchema = Joi.object({
    firstName : Joi.string().min(3).max(20).required(),
    lastName: Joi.string().required().min(3).max(10),
    email: Joi.string().required(),
    password: Joi.string().required()
})

const LoginSchema = Joi.object({
    email: Joi.string().required(),
    password: Joi.string().required()
})

module.exports = {RegisterSchema, LoginSchema};