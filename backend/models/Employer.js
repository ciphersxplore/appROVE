const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const EmployerSchema = new Schema({
  employerCode: Number,
  employerName: String,
  contactPerson: String,
  contactNumber: String,
  location: String,
  noOfApplicants: Number
});

module.exports = mongoose.model("Employer", EmployerSchema);
