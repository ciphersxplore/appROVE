const mongoose = require("mongoose");

const UserSchema = new mongoose.Schema({
  name: String,
  birthday: Date,
  gender: String,
  skills: [
    {
      name: String,
      certification: String
    }
  ],
  //worker/resident, employer, admin,
  userType: String
});

module.exports = mongoose.model("User", UserSchema);
