-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2013 a las 04:25:39
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ceuchnew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE IF NOT EXISTS `albumes` (
  `idalbumes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `ano` varchar(7) DEFAULT NULL,
  `portada` varchar(250) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`idalbumes`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`idalbumes`, `titulo`, `ano`, `portada`, `fecha`) VALUES
(1, 'Titulo prueba', '2013', '1', '2013-12-18 09:39:04'),
(2, 'Album 2', '2013', '1', '2013-12-12 00:00:00'),
(3, 'Titulo 3', '2012', '1', '2013-12-18 09:58:51'),
(4, 'Album 4', '2004', '1', '2013-12-18 09:59:41'),
(5, 'Album 5', '2005', '1', '2013-12-18 09:59:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apostolado`
--

CREATE TABLE IF NOT EXISTS `apostolado` (
  `idapostolado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ano` int(10) unsigned NOT NULL,
  `mes` int(10) unsigned NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `tipo` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`idapostolado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `apostolado`
--

INSERT INTO `apostolado` (`idapostolado`, `ano`, `mes`, `titulo`, `texto`, `tipo`) VALUES
(1, 2013, 12, 'Los niños que sufren', 'Que los niños abandonados o víctimas de cualquier forma de violencia encuentren el amor y la protección que necesitan.', 0),
(2, 2013, 12, 'Preparar la venida del Salvador', 'Que los cristianos, iluminados por el Verbo Encarnado, preparemos la venida del Salvador.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compromisos`
--

CREATE TABLE IF NOT EXISTS `compromisos` (
  `idcompromisos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) NOT NULL,
  `cuerpo` text NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idcompromisos`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `compromisos`
--

INSERT INTO `compromisos` (`idcompromisos`, `titulo`, `cuerpo`, `fecha`) VALUES
(1, 'compromiso 1', 'hasdbasdasjdvbasdashdb asdj askdb askdbas nkd asjdasd asd asd as as', '2013-12-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `idnoticias` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `cuerpo` text NOT NULL,
  `fecha` datetime NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`idnoticias`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idnoticias`, `titulo`, `cuerpo`, `fecha`, `img`) VALUES
(10, 'Titulo noticia 2', 'semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, \r\n\r\ndapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam ', '2013-12-23 03:32:20', 'ceuchNews3878-Koala.jpg'),
(9, 'Titulo primera noticia', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,\r\n\r\npellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis ', '2013-12-23 03:31:33', 'ceuchNews5077-Desert.jpg'),
(11, 'titulo noticia 3', 'rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero \r\n\r\nvenenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', '2013-12-23 03:32:49', 'ceuchNews6871-Lighthouse.jpg'),
(12, 'prueba movil', 'Hshb\r\ndjsd', '2013-12-23 03:42:00', 'ceuchNews1990-Sin_t_tulo-1.jpg'),
(13, 'prueba desde movil', 'Texto del cuerpo', '2013-12-23 04:10:15', 'ceuchNews8995-IMG_20131214_134431.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patronos`
--

CREATE TABLE IF NOT EXISTS `patronos` (
  `idpatronos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `historia` text NOT NULL,
  PRIMARY KEY (`idpatronos`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `patronos`
--

INSERT INTO `patronos` (`idpatronos`, `nombre`, `historia`) VALUES
(1, 'San José', 'José de Nazaret fue, según la religión cristiana, el esposo de María, la madre de Jesús de Nazaret y, por tanto, padre terrenal de Jesús. Era de oficio carpintero, profesión que ense a su hijo y de extracción humilde, aunque las genealogías de Mateo 1:1-17 y Lucas 3:23-38, lo presentan como descendiente del Rey David. Se ignora la fecha de su muerte. Se acepta que José de Nazaret murió cuando Jesucristo tenía ya más de 12 años pero antes del inicio de su predicación. En efecto, el Evangelio de Lucas menciona a «los padres» de Jesús cuando éste ya cuenta con 12 años (Lucas 2:41-50), pero no se menciona a José de Nazaret en los Evangelios canónicos durante el ministerio público de Jesús, por lo que se presume que murió antes de que éste tuviera lugar.\r\n\r\n\r\nSan José en la Biblia\r\n\r\nEl evangelio de Mateo 1:18-24 muestra parte del drama que vivió José de Nazaret al saber que María estaba embarazada. Iba a repudiarla, en secreto porque era justo, porque no quería que fuera apedreada según lo dispuesto en la Ley. (Deuteronomio 22:21). El Ángel del Señor le manifiesta que ella concibió por obra del Espíritu Santo y que su hijo salvará a su pueblo, por lo que José acepta a María.\r\nLuego, cuando Herodes el Grande ordena matar a los niños menores de dos años de Belén y de toda la comarca, José toma al Niño Jesús y a su madre y huye a Egipto (Mateo 2:13-18). Al morir Herodes, José regresa con el niño y su madre, pero no se establece en Judea por miedo a Arquelao, el hijo de Herodes el Grande, y decide retirarse con su familia a Nazaret (Mateo 2:19-23), lugar que, según recientes descubrimientos arqueológicos, era entonces una pequeña aldea con casas muy humildes adyacentes a cuevas rocosas y donde antes vivía María, según Lucas 1:26-32.'),
(2, 'San Tarsicio', 'San Tarsicio, también conocido como Tarcisio (forma incorrecta de Tarsicio), Tarsicio de Roma o Tarsicio mártir fue, según el Martirologio romano y una evidencia epigráfica honorífico-funeraria, un joven que murió martirizado en la Vía Apia de Roma en torno al año 257 o 258 d.C., durante el gobierno del emperador Valeriano. Lo poco que se conoce sobre él con carácter hagiográfico es lo que transmite el martirologio, a lo que se suma la inscripción esculpida en su tumba por mandato del papa Dámaso I, obispo de Roma entre 366 y 384. Tarsicio, conocido como «el mártir de la Eucaristía»,1 es venerado como patrono de los acólitos. El Martirologio romano lo celebraba el 15 de agosto.\r\n\r\nContexto histórico\r\nEn el año 258, Caesar Publius Licinius Valerianus Augustus, más conocido como Valeriano regía el Imperio Romano. El emperador Valeriano ya era conocido entre los cristianos por proclamar edictos de persecución en los que se prohibía el culto cristiano y las asambleas, y se ordenaba la confiscación de los cementerios donde a menudo se reunían. Las motivaciones de Valeriano, alegadas por su propio procurator summarum rationum (procurador del patrimonio imperial) Macriano,2 eran hasta entonces inéditas: intentaba subsanar en parte el déficit estatal con los bienes de los cristianos.3 En el edicto de agosto de 257, Valeriano «prohibió el culto cristiano, obligando al clero a sacrificar a los dioses so pena de destierro» (Actas de Cipriano). Un año más tarde (agosto de 258), un Senadoconsulto amplió el edicto al prescribir:'),
(3, 'San Martin de Porres', 'San Martín de Porres y Velásquez O.P. (* Lima, 9 de diciembre de 1579 - + Lima, 3 de noviembre de 1639) fue un fraile peruano de la orden de los dominicos. Fue el primer santo negro de América y es Patrón universal de la paz. Es conocido también como el Santo de la escoba por ser representado con una escoba en la mano como símbolo de su humildad.\r\nMartín fue hijo de un español de la Orden de Alcántara, Don Juan de Porres (según algunos documentos, el apellido original fue Porras) natural de la ciudad de Burgos, y de una negra liberta, Ana Velázquez, natural de Panamá que residía en Lima. Su padre, debido a su pobreza, no podía casarse con una mujer de su condición, lo que no impidió su amancebamiento con Ana Velásquez. Fruto de esta relación nacieron Martín y dos años después Juana. Martín de Porres fue bautizado el 9 de diciembre de 1579 en la Iglesia de San Sebastián en Lima. El documento bautismal revela que su padre no lo reconoció, pues por ser caballero laico y soltero de una Orden Militar estaba obligado a guardar la continencia de estado. Ana Velázquez dio cuidadosa educación cristiana a sus dos hijos. Juan de Porres estaba destinado en Guayaquil, y desde ahí les proveía de sustento. Viendo la situación precaria en que iban creciendo, sin padre ni maestros, decidió reconocerlos como hijos suyos ante la ley. Hacia 1586, decidió llevarse a sus dos hijos a Guayaquil con sus parientes. Sin embargo, los parientes sólo aceptaron a Juana quien no había heredado la tez morena de su madre, y Martín hubo de regresar a Lima, donde fue puesto bajo el cuidado de doña Isabel García Michel en el arrabal de Malambo, en la parte baja del barrio de San Lázaro, habitado por negros y otros grupos raciales. En 1591 recibió el sacramento de la Confirmación de manos del arzobispo Santo Toribio de Mogrovejo. Martín inició su aprendizaje de boticario en la casa de Mateo Pastor. Esta experiencia sería clave para Martín, conocido luego como gran herbolario y curador de enfermos, puesto que los boticarios hacían curaciones menores y administraban remedios para los casos comunes. También fue aprendiz de barbero, oficio que conllevaba conocimientos de cirugía menor. La proximidad del convento dominico de Nuestra Señora del Rosario y su claustro conventual ejercieron una atracción sobre él. Sin embargo, entrar allí no cambiaría su situación social y el trato que recibiría por ser mulato y bastardo: no podía ser fraile de misa e incluso le prohibieron ser hermano lego.\r\n\r\nVida religiosa\r\nEn 1594 y por la invitación de Fray Juan de Lorenzana, famoso dominico, teólogo y hombre de virtudes, entró en la Orden de Santo Domingo de Guzmán bajo la categoría de "donado", es decir, como terciario por ser hijo ilegítimo (recibía alojamiento y se ocupaba en muchos trabajos como criado). Así vivió 9 años, practicando los oficios más humildes. Fue admitido como hermano de la orden en 1603. Perseveró en su vocación a pesar de la oposición de su padre, y en 1606 profesó los votos de pobreza, castidad y obediencia En el convento, Martín ejerció también como barbero, ropero, sangrador y sacamuelas. Su celda quedaba en el claustro de la enfermería. Todo el aprendizaje como herbolario en la botica y como barbero hicieron de Martín un curador de enfermos, sobre todo de los más pobres y necesitados, a quienes no dudaba en regalar la ropa de los enfermos. Su fama se hizo muy notoria y acudía gente muy necesitada en grandes cantidades. Su labor era amplia: tomaba el pulso, palpaba, vendaba, entablillaba, sacaba muelas, extirpaba lobanillos, suturaba, succionaba heridas sangrantes e imponía las manos con destreza. En Martín confluyeron las tradiciones medicinales española, andina y africana; solía sembrar en un huerto una variedad de plantas que luego combinaba en remedios para los pobres y enfermos. Inició su labor como enfermero aproximadamente entre 1604 y 1610 .\r\nLa vida en el convento estaba regida por la obediencia a sus superiores, pero en el caso de Martín la condición racial también era determinante. Aunque frecuentaba a la gente negra y a castas, nunca planteó reivindicaciones sociales ni políticas; se dedicó únicamente a practicar la caridad, que hizo extensiva a otros grupos étnicos. Todas estas dificultades no impidieron que Martín fuera un fraile alegre. Sus contemporáneos señalan su semblante siempre alegre y risueño.\r\nSu preocupación por los pobres fue notable. Se sabe que los desvalídos lo esperaban en la portería para que los curase de sus enfermedades o les diera de comer. Martín trataba de no exhibirse y hacerlo en la mayor privacidad. La caridad de Martín no se circunscribía a las personas, sino que también se proyectaba a los animales, sobre todo cuando los veía heridos o faltos de alimentos. Tenía separada en la casa de su hermana (que ya estaba casada y en buena posición social) un lugar donde albergaba a gatos y perros sarnosos, llagados y enfermos.\r\nDe todas la virtudes que poseía Martín de Porres sobresalía la humildad, siempre puso a los demás por delante de sus propias necesidades. En una ocasión el Convento tuvo serios apuros económicos y el Prior se vio en la necesidad de vender algunos objetos valiosos, ante esto, Martín de Porres se ofreció a ser vendido como esclavo para remediar la crisis, el Prior conmovido, rechazó su ayuda.\r\nEjerció constantemente su vocación pastoral y misionera; enseñaba la doctrina cristiana y fe de Jesucristo a los negros e indios y gente rústica que asistían a escucharlo en calles y en las haciendas cercanas a las propiedades de la Orden ubicadas en Limatambo. La situación de pobreza y abandono moral que estos padecían le preocupaban; es así que con la ayuda de varios ricos de la ciudad - entre ellos el virrey Conde de Chinchón, que en propia mano le entregaba cada mes no menos de cien pesos - fundó el Asilo y Escuela de Santa Cruz para reunir a todos los vagos, huérfanos y limosneros y ayudarles a salir de su penosa situación.\r\nMartín siempre aspiró a realizar vocación misionera en países alejados. Con frecuencia lo oyeron hablar de Filipinas, China y especialmente en Japón del cual manifestó conocer. El futuro santo fue frugal, abstinente y vegetariano. Dormía sólo dos o tres horas, mayormente por las tardes. Usó siempre un simple hábito de cordellate blanco con una capa larga de color negro . Alguna vez que el Prior lo obligó a recibir un hábito nuevo y otro fraile lo felicitó, Martín, risueño, le respondió: "pues con éste me han de enterrar" y efectivamente, así fue.'),
(4, 'San Luis de Gonzaga', 'San Luis Gonzaga (Castiglione delle Stiviere, Lombardía, 9 de marzo de 1568 - Roma, 21 de junio de 1591). Jesuita italiano. Beatificado por Paulo V el 19 de octubre de 1605, y canonizado el 13 de diciembre de 1726 por Benedicto XIII, quien lo declaró patrono de la juventud, título confirmado por Pío XI el 13 de junio de 1926. Se celebra su fiesta el 21 de junio.\r\n\r\nPrimogénito de Ferrante Gonzaga, marqués de Castiglione, quien en 1566, estando al servicio del rey español Felipe II, se casó en la capilla del Real Alcázar de Madrid con Marta Tana de Santena, dama de la reina Isabel de Valois. Fue el primero de siete hijos y heredero del título. Después de la batalla de Lepanto (1571), don Ferrante recibió el encargo de preparar 3.000 infantes para la empresa de Túnez, y se trasladó a Castelma giore con su hijo Luis que, durante cuatro o cinco años, vivió entre los soldados. Cuando en 1573 su padre se embarcó para África, Luis regresó a Castiglione, donde, con su madre y sus hermanos, vivió una vida de intensa piedad. La peste de 1576, impulsó a su padre a llevar a sus dos hijos mayores, Luis y Rodolfo, a Florencia, cuyo gran duque Francisco de Médicis, había sido compañero suyo en Madrid. Hasta 1580, Luis y Rodolfo estuvieron al cuidado de un ayo, Pierfrancesco del Turco, quien les buscó maestros de caligrafía, latín, equitación. Cuando en 1579 Ferrante fue nombrado gobernador de Monferrato por el duque de Mantua Guillermo Gonzaga, hizo conducir a sus hijos a la corte ducal. En Mantua, la duquesa Leonor de Austria cuidó a Luis como una madre. Una dolencia hepática le obligó a seguir severas dietas, que le ayudaron en su vida de penitencia. A los 12 años recibió allí la primera comunión de manos de San Carlos Borromeo que se encontraba de visita por la región de Brescia. En 1581, su padre se trasladó a Madrid como parte del séquito de la ex emperatriz María de Habsburgo, hija de Carlos I y viuda de Maximiliano II; Luis y Rodolfo serían pajes del príncipe don Diego, heredero de Felipe II. En la corte de España el Libro de la oración y meditación de Luis de Granada fue su guía de vida interior, al paso que recibía lecciones de ciencias del Dr. Dimas de Miguel, amigo de Juan de Herrera.\r\n\r\n\r\nVocación religiosa\r\n\r\nEstudió letras, ciencias y filosofía, leyó textos religiosos que le hicieron tomar la decisión de entrar en la Compañía de Jesús. Los esfuerzos de su padre por retenerlo, confiándole delicados asuntos de su familia en Lombardía, no consiguieron nada. El 2 de noviembre de 1583, en el palacio de los Gonzaga de Mantua, cedió a su hermano Rodolfo todos sus derechos como primogénito, añadiendo: «¿Quién de los dos es más feliz?; ciertamente, yo». Dada la importancia estratégica del marquesado de Castiglione, fue necesario que la cesión fuera aprobada por el Emperador. El 25 del mismo mes entraba en el noviciado jesuita de Roma. Siguieron luego los estudios de filosofía y teología. En 1587 recibió las órdenes menores. Dos años después, su director espiritual, Roberto Belarmino, le comunicó la orden del padre general Claudio Acquaviva de trasladarse a Castiglione para poner paz entre Rodolfo y el duque de Mantua en sus disputas por el castillo de Solferino, a petición de las madres de entrambos. Lo consiguió y, además, indujo a Rodolfo a hacer público su matrimonio clandestino con Elena Aliprandi, sin dar importancia a las diferencias sociales.\r\n\r\n\r\nFallecimiento\r\n\r\nEn 1590-1591 la peste hizo estragos en Roma, causando miles de muertes entre ellas la de los papas Sixto V, Urbano VII y Gregorio XIV. Luis atendió con heroísmo a los apestados en S. Giacomo degli Incurabili, en San Juan de Letrán, en S. María de la Consolación, y en el hospital improvisado junto a la iglesia del Gesú, donde contrajo la enfermedad. Así moría a los 23 años, tras una vida rica en experiencias. Reconocía que «el Señor le había dado un gran fervor en ayudar a los pobres», y añadía: «cuando uno tiene que vivir pocos años, Dios lo incita más a emprender tales acciones». Al padre provincial, que llegó a visitarle horas antes de morir, le dijo: ¡Ya nos vamos, padre; ya nos vamos...!\r\n¿A dónde, Luis?\r\n¡Al Cielo!\r\n¡Oigan a este joven! -exclamó el provincial- Habla de ir al cielo como nosotros hablamos de ir a Frascati.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE IF NOT EXISTS `publicidad` (
  `idpublicidad` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`idpublicidad`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `publicidad`
--

INSERT INTO `publicidad` (`idpublicidad`, `texto`) VALUES
(1, 'Recuerda, todos los sábados desde las 15:30 hrs en Peyronet #1669 Quilpué V Región'),
(2, 'Síguenos en @ceuchelsol / Búscanos en facebook.com/ceuch ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `idslider` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `comentario` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`idslider`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`idslider`, `fecha`, `comentario`, `estado`) VALUES
(1, '2013-12-18 15:49:49', 'slider 1', 1),
(2, '2013-12-18 15:50:19', 'slider 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombres`, `apellidos`, `username`, `pass`) VALUES
(1, 'Sebastián Elias', 'Franco Brantes', 'sebfrab', 'a8f5f167f44f4964e6c998dee827110c'),
(2, 'Renata Camila', 'Belmar Guerra', 'rena', 'a3b332d4506b767c216acba667d08434');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
