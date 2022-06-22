<div class="main_box">
            <input type="checkbox" id="check">
            <div class="btn_one">
                <label for="check">
                    <i class="fas fa-bars"></i>
                </label>
            </div>
            <div class="sidebar_menu">
                <div class="logo">
                    <a href="../index.php">Gestión</a>
                </div>
                <div class="btn_two">
                    <label for="check">
                        <i class="fas fa-times"></i>
                    </label>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <i class="fas fa-qrcode"></i>
                            <a href="../index.php">Inicio</a>
                        </li>
                        <!-- Data -->
                        <div onclick="SetBox('Data')">
                            <li>
                                <i class="far fa-newspaper"></i>
                                <a href="#">Data</a>
                                <ul id="Data">
                                    <li>
                                        <i class="fas fa-plus"></i>
                                        <a href="./catalogo.php">Añadir</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-minus"></i>
                                        <a href="./FormDEL.php">Quitar</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-exchange-alt"></i>
                                        <a href="./FormMOD.php">Modificar</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <!-- Fin de Data -->
                        <div onclick="SetBox('Consultas')">
                            <li>
                                <i class="fas fa-user-plus"></i>
                                <a href="./consultas.php">Consultas</a>
                                <ul id="Consultas">
                                </ul>
                            </li>
                        </div>
                        <li>
                            <i class="far fa-comments"></i>
                            <a href="#">Planes</a>
                        </li>
                    </ul>
                </div>
            </div>