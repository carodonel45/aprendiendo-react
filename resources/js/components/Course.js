import React from 'react'
import { Link } from 'react-router-dom'

export default function Course(props) {

    const divStyle = {

        width: '400px'

    }
    return (
        <div className="card m-2" style={divStyle}>
        < h2 className="card-title">
            {props.curso ? props.curso  : 'cursos De LEINLA NIC'}
          </ h2>
            <div className="card-body">
                < h2 className="card-title"
                >{props.curso ? props.curso : 'Nombre del curso'}
                 </ h2>

                <p className="card-text">
                    {props.descripcion ? props.descripcion : 'Descripcion del curso'}
                </p>
                <Link to={'/cursos/'+ props.id} className="btn btn-outline-primary"> Tomar curso</Link>

            </div>
        </div>
    )
}
