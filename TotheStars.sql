CREATE TABLE Personajes (
    personaje_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL UNIQUE,
    clase_id INT,
    elemento ENUM('Fuego', 'Hielo', 'Viento', 'Rayo', 'Imaginario', 'Cuántico', 'Físico') NOT NULL,
    tier_list ENUM('S', 'A', 'B', 'C', 'D') NOT NULL,
    numero_estrellas enum ('4', '5'),
    FOREIGN KEY (clase_id) REFERENCES Vias(vias_id),
    FOREIGN KEY (planeta_id) REFERENCES Planetas(planeta_id),
    foreign key (afiliacion_id) references Afiliacion (afiliacion_id)
);


