import React from 'react'
import Select from 'react-select'
import { useState, useEffect } from 'react';

const SelectClientes = (params) => {
  const [options, setOptions] = useState([])
  const [cargar, setCargar] = useState(true)

  useEffect(() => {
    if (Object.keys(params.clientes).length > 0 && cargar) {
      setCargar(false)
      cargarDatos()
    }
  })


  function cargarDatos() {
    if (options.length == 0) {
      let opts = []
      for (let i = 0; i < params.clientes.length; i++) {
        let nom = params.clientes[i].nombre
        if (params.clientes[i].cedula) {
          nom = params.clientes[i].cedula + ': ' + params.clientes[i].nombre
        }
        if (params.clientes[i].apellidos != null) {
          nom = nom + " " + params.clientes[i].apellidos
        }
        let item = new OptionsAuto(params.clientes[i].id, nom)
        opts.push(item)
      }
      setOptions(opts)
    }
  }

  function getChange(e) {
    document.getElementById('inputValue').value = e.codigo
    document.getElementById('inputValue').click()
  }
  return (
    <div>
      <input type='hidden' id='inputValue' onClick={params.getCliente} />
      <Select onChange={getChange} options={options} />
    </div>
  )
}

export default SelectClientes

class OptionsAuto {
  constructor(codigo, label) {
    this.codigo = codigo;
    this.label = label;
  }
}   