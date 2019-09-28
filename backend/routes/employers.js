const EmployerModel = require("../models/Employer.js");
const express = require("express");
const router = express.Router();

//Retrieving of all job listing
router.get("/", async (req, res) => {
  let employers = await EmployerModel.find();
  res.send(employers);
});

//Retrieving of specific job item
router.get("/:id", async (req, res) => {
  let employer = await EmployerModel.findById(req.params.id);
  res.send(employer);
});

//Create an instance of job object and save it to db
router.post("/", async (req, res) => {
  let employer = EmployerModel({
    employerCode: req.body.employerCode,
    employerName: req.body.employerName,
    contactPerson: req.body.contactPerson,
    contactNumber: req.body.contactNumber,
    location: req.body.location,
    noOfApplicants: req.body.noOfApplicants
  });

  employer = await employer.save();
  res.send(employer);
});

//Update a part of an object and update db
router.put("/:id", async (req, res) => {
  let employer = await ScheduleModel.findById(req.params.id);

  employer.employerCode = req.body.employerCode;
  employer.employerName = req.body.employerName;
  employer.contactPerson = req.body.contactPerson;
  employer.contactNumber = req.body.contactNumber;
  employer.location = req.body.location;
  employer.noOfApplicants = req.body.noOfApplicants;

  employer = await employer.save();
  res.send(employer);
});

//Delete an object
router.delete("/:id", async (req, res) => {
  let employer = await EmployerModel.findByIdAndRemove(req.params.id);
  res.send(employer);
});

module.exports = router;
