import React from 'react'
import TableItem from './TableItem'

const Tabla = () => {

    return (
        <div className="Table-respponsive">
            <table className="table table-striped table-inverse">
                <thead className="thead-inverse">

                    <tr>
                        <th>Encabezado 3</th>
                        <th>Encabezado 1</th>
                        <th>Encabezado 2</th>


                    </tr>

                </thead>
                <tbody>
                    {
                        [1,2,3,4,5].map(item => {
                         return <TableItem key={item}/>

                        })
                    }

                </tbody>
            </table>
        </div>

    )
}
export default Tabla
