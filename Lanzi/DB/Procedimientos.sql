use usuario;

DELIMITER //

create procedure SeleccionarPorDniDec()

    BEGIN
        
        select * from Alumno order by NroDoc DESC;

    END //    


create procedure  InsertarAlumno(in TipoDoc, in Nombre varchar(50), in Apellido(50), in NroDoc smallint);

BEGIN

    insert into Alumno values(TipoDoc, Nombre, Apellido, NroDoc);

END//


create procedure InsertarMateria(in NumeroM smallint, in NombreM varchar(50));

BEGIN
    
    insert into Materia values(NumeroM, NombreM);
    
END//    

DELIMITER;