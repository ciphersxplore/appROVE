const mongoose = require("mongoose");
const Schema = mongoose.Schema;
const TrainingSchema = new Schema({
  trainingTitle: String,
  location: String,
  //object start time, end time, date
  schedule: {
    startTime: String,
    endTime: String,
    date: Date
  },
  applicants: {
    type: [
      {
        type: Schema.Types.ObjectId,
        ref: "user"
      }
    ]
  }
});

module.exports = mongoose.model("Training", TrainingSchema);
