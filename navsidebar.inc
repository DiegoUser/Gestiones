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
                        <div onclick="SetBox('Ingresos')">
                            <li>
                                <i class="fas fa-user-plus"></i>
                                <a href="#">Ingresos</a>
                                <ul id="Ingresos">
                                    <li>
                                        <i class="fas fa-wallet"></i>
                                        <a href="#">Ingresos Fijos</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chart-line"></i>
                                        <a href="#">Otros Ingresos</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <div onclick="SetBox('Egresos')">
                            <li>
                                <i class="fas fa-user-minus"></i>
                                <a href="#">Egresos</a>
                                <ul id="Egresos">
                                    <li>
                                        <i class="fas fa-file-invoice-dollar"></i>
                                        <a href="./consultas.php">Egresos Pasados</a>
                                    </li>
                                    <li>
                                        <i class="far fa-calendar-alt"></i>
                                        <a href="#">Egresos Futuros</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                        <li>
                            <i class="fas fa-piggy-bank"></i>
                            <a href="#">Ahorros</a>
                        </li>
                        <li>
                            <i class="far fa-comments"></i>
                            <a href="#">Planes</a>
                        </li>
                    </ul>
                </div>
            </div>