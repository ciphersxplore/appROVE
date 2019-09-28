const mongoose = require("mongoose");

const express = require("express");
const app = express();

mongoose
  .connect(
    "mongodb+srv://root:admin1234@cluster0-gyzvc.mongodb.net/tutorials?retryWrites=true",
    { useNewUrlParser: true, useCreateIndex: true }
  )
  .then(() => {
    console.log("Successfully connected to database");
  })
  .catch(error => {
    console.error("Error connecting to MongoDB database", error);
  });

app.listen(config.port, () => {
  console.log(`listening to port ${config.port}`);
});
