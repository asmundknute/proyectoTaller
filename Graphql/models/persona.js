const mongoose = require("mongoose");
const personaSchema = new mongoose.Schema({
  rut:String,
  nombre:String,
  apellido:String,
  contrasena:String,
  fechan:String,
  fechac:String,
  fondop:String,
  previcions:String,
});

module.exports = mongoose.model("personas", personaSchema);