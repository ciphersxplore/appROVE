const mongoose = require("mongoose");

const UserSchema = new mongoose.Schema({
  img_path: String,
  firstName: String,
  lastName: String,
  contactNumber: String,
  email: String,
  age: Number,
  gender: String,
  skills: String,
  trainings: [{ name: String }],
  password: String,

  //resident, employer, admin,
  userType: String,

  //inactive if the person is no longer part of the community
  isActive: Boolean,
  isHired: Boolean
});

module.exports = mongoose.model("User", UserSchema);
