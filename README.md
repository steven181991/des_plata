-- LOGIN 
http://127.0.0.1:8000/api/login

{
    "correo":"user2@cu.ucsg.edu.ec",
    "clave":"111"
}
--------------------------------------------------------------------

-- REGISTRO
http://127.0.0.1:8000/api/registrar

{
    "nombre":"USER 1",
    "correo":"user1@cu.ucsg.edu.ec",
    "clave":"1"
}
--------------------------------------------------------------------

/* REGISTRO DE LISTA NUEVA */

http://127.0.0.1:8000/api/reg_cab_docs

{
    "nombre":"Lista 1 en user 1",
    "id_user":"1"
}
--------------------------------------------------------------------
/* ELIMINACION DE LISTA,RELACION */
/* FALTA EL MOVIMIENTO */

http://127.0.0.1:8000/api/del_reg_cab_docs/4

--------------------------------------------------------------------
/* LISTADO DE TODOS LOS MOVIMIENTOS QUE ESTAN EN EL DOCUMENTO */

http://127.0.0.1:8000/api/lst_mov_docs/1


--------------------------------------------------------------------
-- LISTADO DE DOCUMENTOS POR USUARIO
http://127.0.0.1:8000/api/lst_cab_docs/1




--------------------------------------------------------------------
-- AGREGANDO ITEM A CABECERA DEL PENDIENTE

http://127.0.0.1:8000/api/add_movpend
{
    "id_cabdoc":"1",
    "nombre":"SAL ROSADA",
    "cantidad":"2"
}

--------------------------------------------------------------------
