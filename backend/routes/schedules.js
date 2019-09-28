const ScheduleModel = require("../models/Schedule.js");
const express = require("express");
const router = express.Router();

//Retrieving of all job listing
router.get("/", async (req, res) => {
  let schedules = await ScheduleModel.find();
  res.send(schedules);
});

//Retrieving of specific job item
router.get("/:id", async (req, res) => {
  let schedule = await TrainingModel.findById(req.params.id);
  res.send(schedule);
});

//Create an instance of job object and save it to db
router.post("/", async (req, res) => {
  let schedule = ScheduleModel({
    scheduleNumber: req.body.scheduleNumber,
    departureTime: req.body.departureTime,
    departureLocation: req.body.departureLocation,
    arrivalTime: req.body.arrivalTime,
    arrivalLocation: req.body.arrivalLocation
  });

  schedule = await schedule.save();
  res.send(schedule);
});

//Update a part of an object and update db
router.put("/:id", async (req, res) => {
  let schedule = await ScheduleModel.findById(req.params.id);

  schedule.scheduleNumber = req.body.scheduleNumber;
  schedule.departureTime = req.body.departureTime;
  schedule.departureLocation = req.body.departureLocation;
  schedule.arrivalTime = req.body.arrivalTime;
  schedule.arrivalLocation = req.body.arrivalLocation;

  schedule = await schedule.save();
  res.send(schedule);
});

//Delete an object
router.delete("/:id", async (req, res) => {
  let schedule = await ScheduleModel.findByIdAndRemove(req.params.id);
  res.send(schedule);
});

module.exports = router;
