const TrainingModel = require("../models/Training.js");
const express = require("express");
const router = express.Router();

//Retrieving of all job listing
router.get("/", async (req, res) => {
  let trainings = await TrainingModel.find();
  res.send(trainings);
});

//Retrieving of specific job item
router.get("/:id", async (req, res) => {
  let training = await TrainingModel.findById(req.params.id);
  res.send(training);
});

//******************TESTED thru Postman
//Create an instance of job object and save it to db
router.post("/", async (req, res) => {
  let training = TrainingModel({
    trainingCode: req.body.trainingCode,
    trainingTitle: req.body.trainingTitle,
    location: req.body.location,
    schedule: req.body.schedule,
    applicants: req.body.applicants
  });

  training = await training.save();
  res.send(training);
});

//Update a part of an object and update db
router.put("/:id", async (req, res) => {
  let training = await TrainingModel.findById(req.params.id);

  training.trainingCode = req.body.slotCode;
  training.trainingTitle = req.body.dimensions;
  training.location = req.body.employer;
  training.schedule = req.body.schedule;

  training = await training.save();
  res.send(training);
});

//Delete an object
router.delete("/:id", async (req, res) => {
  let training = await TrainingModel.findByIdAndRemove(req.params.id);
  res.send(training);
});

module.exports = router;
