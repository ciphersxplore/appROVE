const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const TrainingSchema = new Schema({
  trainingCode: String,
  trainingTitle: String,
  location: String,
  schedule: String,
  applicants: [{ name: String }]
});

module.exports = mongoose.model("Training", TrainingSchema);
