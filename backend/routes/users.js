const UserModel = require("../models/User");
const express = require("express");
const router = express.Router();

//Retrieving of all users listing
router.get("/", async (req, res) => {
  let users = await UserModel.find();
  res.send(users);
});

//******************TESTED thru Guzzle
//Retrieving of specific job item
router.get("/:id", async (req, res) => {
  let user = await UserModel.findById(req.params.id);
  res.send(user);
});

//******************TESTED thru Postman
//Create an instance of job object and save it to db
router.post("/", async (req, res) => {
  try {
    let user = await UserModel.init();

    user = await UserModel({
      firstName: req.body.firstName,
      lastName: req.body.lastName,
      contactNumber: req.body.contactNumber,
      email: req.body.email,
      age: req.body.age,
      gender: req.body.gender,
      img_path: req.body.img_path,
      password: req.body.password,
      skills: req.body.skills,
      userType: "residents",
      status: "active",
      isHired: req.body.isHired
    });

    user = await user.save();
    res.send(user);
  } catch (e) {
    res.send("failed. go home now.");
  }
});

//Update a part of an object and update db
router.put("/:id", async (req, res) => {
  let user = await UserModel.findById(req.params.id);

  user.firstName = req.body.firstName;
  user.lastName = req.body.lastName;
  user.contactNumber = req.body.contactNumber;
  user.age = req.body.age;
  user.gender = req.body.gender;
  user.address = req.body.address;
  user.skills = req.body.skills;
  user.userType = req.body.userType;
  user.isActive = req.body.isActive;
  user.isHired = req.body.isHired;

  user = await user.save();
  res.send(user);
});

//Delete an object
router.delete("/:id", async (req, res) => {
  let user = await UserModel.findByIdAndRemove(req.params.id);
  res.send(user);
});
module.exports = router;
