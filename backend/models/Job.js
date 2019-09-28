const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const JobSchema = new Schema({
  jobCode: String,
  jobTitle: String,
  employer: String,
  location: String,
  requirement: String,
  salary: Number,
  applicant: [
    {
      name: String
    }
  ]
});

module.exports = mongoose.model("Job", JobSchema);
