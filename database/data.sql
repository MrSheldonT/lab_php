CREATE DATABASE test_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE test_db;

CREATE TABLE usuarios (
    id INT PRIMARY KEY,
    usuario VARCHAR(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    correo VARCHAR(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    contrasena VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci -- no encriptado
);


INSERT INTO usuarios(id, usuario, correo, contrasena) VALUES
(1, 'admin', 'adminbits@code.com', '籫籲籽籼籪籷籭籬籸籭籮籅籫籪籷籭籮类籪籪籼籲籫籲籮籷籼籮籬类籮籽籪籇'),
(2, 'mariagomez', 'maria.gomez@example.com', 'maria2024'),
(3, 'carlossantos', 'carlos.santos@example.com', 'pass123'),
(4, 'laura_98', 'laura98@example.com', 'laura_pass'),
(5, 'pedro_rojas', 'pedro.rojas@example.com', 'rojas2023'),
(6, 'angel_lopez', 'angel.lopez@example.com', 'angel321'),
(7, 'sofia_martinez', 'sofia.martinez@example.com', 'sofia_pass'),
(8, 'david_garcia', 'david.garcia@example.com', 'david456'),
(9, 'elena_ramirez', 'elena.ramirez@example.com', 'elena987'),
(10, 'ricardo_torres', 'ricardo.torres@example.com', 'ricardo000');
