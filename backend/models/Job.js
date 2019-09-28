const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const JobSchema = new Schema({
  jobCode: String,
  jobTitle: String,
  employer: String,
  location: String,
  requirement: {
    certification: String
  },
  salary: String
});

module.exports = mongoose.model("Job", JobSchema);
