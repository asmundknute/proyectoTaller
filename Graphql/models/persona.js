const mongoose = require("mongoose");
const personaSchema = new mongoose.Schema({
  nombre:String,
  apellido:String,
  rut:String,
  nombreUsuario:String,
  contrasena:String,
  fechan:String,
  fechac:String,
  fondop:String,
  previcions:String,
});

module.exports = mongoose.model("personas", personaSchema);