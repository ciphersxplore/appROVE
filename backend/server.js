const mongoose = require("mongoose");
const config = require("./config");
const express = require("express");
const app = express();

const users = require("./routes/users");
const jobs = require("./routes/jobs");
const employers = require("./routes/employers");
const schedules = require("./routes/schedules");
const trainings = require("./routes/trainings");

mongoose
  .connect(
    "mongodb+srv://ciphers:Ciphers1234@cluster0-hzlr1.mongodb.net/appROVE?retryWrites=true&w=majority",
    { useNewUrlParser: true, useCreateIndex: true }
  )
  .then(() => {
    console.log("Successfully connected to database");
  })
  .catch(error => {
    console.error("Error connecting to MongoDB database", error);
  });

app.use(express.json());
app.use("/api/users", users);
app.use("/api/jobs", jobs);
app.use("/api/employers", employers);
app.use("/api/schedules", schedules);
app.use("/api/trainings", trainings);

app.listen(config.port, () => {
  console.log(`listening to port ${config.port}`);
});
