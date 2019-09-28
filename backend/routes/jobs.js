const JobModel = require("../models/Job.js");
const express = require("express");
const router = express.Router();

//Retrieving of all job listing
router.get("/", async (req, res) => {
  let jobs = await JobModel.find();
  res.send(jobs);
});

//Retrieving of specific job item
router.get("/:id", async (req, res) => {
  let job = await JobModel.findById(req.params.id);
  res.send(job);
});

//Create an instance of job object and save it to db
router.post("/", async (req, res) => {
  let job = JobModel({
    jobCode: req.body.jobCode,
    jobTitle: req.body.jobTitle,
    employer: req.body.employer,
    location: req.body.location,
    requirement: req.body.requirement,
    salary: req.body.salary
  });

  job = await job.save();
  res.send(job);
});

//Update a part of an object and update db
router.put("/:id", async (req, res) => {
  let job = await JobModel.findById(req.params.id);

  job.jobCode = req.body.jobCode;
  job.jobTitle = req.body.jobTitle;
  job.employer = req.body.employer;
  job.location = req.body.location;
  job.requirement = req.body.requirement;
  job.salary = req.body.salary;

  job = await job.save();
  res.send(job);
});

//Delete an object
router.delete("/:id", async (req, res) => {
  let job = await JobModel.findByIdAndRemove(req.params.id);
  res.send(job);
});

module.exports = router;
