--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.4
-- Dumped by pg_dump version 9.5.1

-- Started on 2016-09-04 22:36:17

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 13249)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 3144 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 188 (class 1259 OID 10426253)
-- Name: categoria; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE categoria (
    c_id integer NOT NULL,
    c_nombre character varying(250) NOT NULL,
    c_descripcion character varying(250) NOT NULL
);


ALTER TABLE categoria OWNER TO zripkhfignctym;

--
-- TOC entry 187 (class 1259 OID 10426251)
-- Name: categoria_c_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE categoria_c_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE categoria_c_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3145 (class 0 OID 0)
-- Dependencies: 187
-- Name: categoria_c_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE categoria_c_id_seq OWNED BY categoria.c_id;


--
-- TOC entry 184 (class 1259 OID 10426234)
-- Name: comentario; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE comentario (
    c_id integer NOT NULL,
    c_id_edificio integer NOT NULL,
    c_id_usuario integer NOT NULL,
    c_contenido character varying(250) NOT NULL,
    c_fecha timestamp without time zone NOT NULL
);


ALTER TABLE comentario OWNER TO zripkhfignctym;

--
-- TOC entry 183 (class 1259 OID 10426232)
-- Name: comentario_c_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE comentario_c_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE comentario_c_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3146 (class 0 OID 0)
-- Dependencies: 183
-- Name: comentario_c_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE comentario_c_id_seq OWNED BY comentario.c_id;


--
-- TOC entry 201 (class 1259 OID 10426328)
-- Name: discapacidad; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE discapacidad (
    d_id_usuario integer NOT NULL,
    d_id_discapacidad_info integer NOT NULL
);


ALTER TABLE discapacidad OWNER TO zripkhfignctym;

--
-- TOC entry 203 (class 1259 OID 10426333)
-- Name: discapacidad_info; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE discapacidad_info (
    d_id integer NOT NULL,
    d_tipo character varying(250) NOT NULL
);


ALTER TABLE discapacidad_info OWNER TO zripkhfignctym;

--
-- TOC entry 202 (class 1259 OID 10426331)
-- Name: discapacidad_info_d_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE discapacidad_info_d_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE discapacidad_info_d_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3147 (class 0 OID 0)
-- Dependencies: 202
-- Name: discapacidad_info_d_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE discapacidad_info_d_id_seq OWNED BY discapacidad_info.d_id;


--
-- TOC entry 200 (class 1259 OID 10426319)
-- Name: edificio; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE edificio (
    e_id integer NOT NULL,
    e_nombre character varying(250) NOT NULL,
    e_descripcion character varying(250),
    e_id_reporte integer,
    e_id_categoria integer
);


ALTER TABLE edificio OWNER TO zripkhfignctym;

--
-- TOC entry 199 (class 1259 OID 10426317)
-- Name: edificio_e_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE edificio_e_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE edificio_e_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3148 (class 0 OID 0)
-- Dependencies: 199
-- Name: edificio_e_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE edificio_e_id_seq OWNED BY edificio.e_id;


--
-- TOC entry 194 (class 1259 OID 10426294)
-- Name: permiso; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE permiso (
    p_id integer NOT NULL,
    p_constante character varying(250) NOT NULL,
    p_descripcion character varying(250) NOT NULL
);


ALTER TABLE permiso OWNER TO zripkhfignctym;

--
-- TOC entry 193 (class 1259 OID 10426292)
-- Name: permiso_p_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE permiso_p_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE permiso_p_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3149 (class 0 OID 0)
-- Dependencies: 193
-- Name: permiso_p_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE permiso_p_id_seq OWNED BY permiso.p_id;


--
-- TOC entry 196 (class 1259 OID 10426305)
-- Name: permiso_por_rol; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE permiso_por_rol (
    p_id integer NOT NULL,
    p_id_rol integer NOT NULL
);


ALTER TABLE permiso_por_rol OWNER TO zripkhfignctym;

--
-- TOC entry 195 (class 1259 OID 10426303)
-- Name: permiso_por_rol_p_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE permiso_por_rol_p_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE permiso_por_rol_p_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3150 (class 0 OID 0)
-- Dependencies: 195
-- Name: permiso_por_rol_p_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE permiso_por_rol_p_id_seq OWNED BY permiso_por_rol.p_id;


--
-- TOC entry 198 (class 1259 OID 10426311)
-- Name: reporte; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE reporte (
    r_id integer NOT NULL,
    r_id_edificio integer NOT NULL,
    r_fecha timestamp without time zone NOT NULL,
    r_calificacion character varying(250) NOT NULL
);


ALTER TABLE reporte OWNER TO zripkhfignctym;

--
-- TOC entry 192 (class 1259 OID 10426286)
-- Name: reporte_info; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE reporte_info (
    r_id integer NOT NULL,
    r_rampas smallint NOT NULL,
    r_ascensores smallint NOT NULL,
    r_pasamanos smallint NOT NULL,
    r_pasillos smallint NOT NULL,
    r_banos smallint NOT NULL,
    r_entradas_salidas smallint NOT NULL
);


ALTER TABLE reporte_info OWNER TO zripkhfignctym;

--
-- TOC entry 191 (class 1259 OID 10426284)
-- Name: reporte_info_r_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE reporte_info_r_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE reporte_info_r_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3151 (class 0 OID 0)
-- Dependencies: 191
-- Name: reporte_info_r_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE reporte_info_r_id_seq OWNED BY reporte_info.r_id;


--
-- TOC entry 197 (class 1259 OID 10426309)
-- Name: reporte_r_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE reporte_r_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE reporte_r_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3152 (class 0 OID 0)
-- Dependencies: 197
-- Name: reporte_r_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE reporte_r_id_seq OWNED BY reporte.r_id;


--
-- TOC entry 190 (class 1259 OID 10426264)
-- Name: rol; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE rol (
    r_id integer NOT NULL,
    r_constante character varying(250),
    r_nombre character varying(250) NOT NULL
);


ALTER TABLE rol OWNER TO zripkhfignctym;

--
-- TOC entry 189 (class 1259 OID 10426262)
-- Name: rol_r_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE rol_r_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE rol_r_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3153 (class 0 OID 0)
-- Dependencies: 189
-- Name: rol_r_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE rol_r_id_seq OWNED BY rol.r_id;


--
-- TOC entry 186 (class 1259 OID 10426242)
-- Name: usuario; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE usuario (
    u_id integer NOT NULL,
    u_usuario character varying(250) NOT NULL,
    u_password character varying(250) NOT NULL
);


ALTER TABLE usuario OWNER TO zripkhfignctym;

--
-- TOC entry 205 (class 1259 OID 11118272)
-- Name: usuario_info; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE usuario_info (
    u_id integer NOT NULL,
    u_nombre character varying(250) NOT NULL,
    u_apellidos character varying(250) NOT NULL,
    u_mail character varying(250) NOT NULL,
    u_sexo character varying(250) NOT NULL,
    u_fecha_nacimiento character varying(250) NOT NULL,
    u_pais character varying(250) NOT NULL,
    u_tipo_discapacidad integer NOT NULL,
    u_porcentajediscapacidad character varying(250) NOT NULL,
    u_role integer NOT NULL,
    u_usuario integer
);


ALTER TABLE usuario_info OWNER TO zripkhfignctym;

--
-- TOC entry 204 (class 1259 OID 11118270)
-- Name: usuario_info_u_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE usuario_info_u_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_info_u_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3154 (class 0 OID 0)
-- Dependencies: 204
-- Name: usuario_info_u_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE usuario_info_u_id_seq OWNED BY usuario_info.u_id;


--
-- TOC entry 185 (class 1259 OID 10426240)
-- Name: usuario_u_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE usuario_u_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_u_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3155 (class 0 OID 0)
-- Dependencies: 185
-- Name: usuario_u_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE usuario_u_id_seq OWNED BY usuario.u_id;


--
-- TOC entry 182 (class 1259 OID 10426226)
-- Name: voto; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE voto (
    v_id integer NOT NULL,
    v_id_edificio integer NOT NULL,
    v_id_usuario integer NOT NULL,
    v_valoracion smallint NOT NULL,
    v_fecha timestamp without time zone NOT NULL
);


ALTER TABLE voto OWNER TO zripkhfignctym;

--
-- TOC entry 181 (class 1259 OID 10426224)
-- Name: voto_v_id_seq; Type: SEQUENCE; Schema: public; Owner: zripkhfignctym
--

CREATE SEQUENCE voto_v_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE voto_v_id_seq OWNER TO zripkhfignctym;

--
-- TOC entry 3156 (class 0 OID 0)
-- Dependencies: 181
-- Name: voto_v_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zripkhfignctym
--

ALTER SEQUENCE voto_v_id_seq OWNED BY voto.v_id;


--
-- TOC entry 2952 (class 2604 OID 10426256)
-- Name: c_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY categoria ALTER COLUMN c_id SET DEFAULT nextval('categoria_c_id_seq'::regclass);


--
-- TOC entry 2950 (class 2604 OID 10426237)
-- Name: c_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY comentario ALTER COLUMN c_id SET DEFAULT nextval('comentario_c_id_seq'::regclass);


--
-- TOC entry 2959 (class 2604 OID 10426336)
-- Name: d_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY discapacidad_info ALTER COLUMN d_id SET DEFAULT nextval('discapacidad_info_d_id_seq'::regclass);


--
-- TOC entry 2958 (class 2604 OID 10426322)
-- Name: e_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY edificio ALTER COLUMN e_id SET DEFAULT nextval('edificio_e_id_seq'::regclass);


--
-- TOC entry 2955 (class 2604 OID 10426297)
-- Name: p_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY permiso ALTER COLUMN p_id SET DEFAULT nextval('permiso_p_id_seq'::regclass);


--
-- TOC entry 2956 (class 2604 OID 10426308)
-- Name: p_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY permiso_por_rol ALTER COLUMN p_id SET DEFAULT nextval('permiso_por_rol_p_id_seq'::regclass);


--
-- TOC entry 2957 (class 2604 OID 10426314)
-- Name: r_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY reporte ALTER COLUMN r_id SET DEFAULT nextval('reporte_r_id_seq'::regclass);


--
-- TOC entry 2954 (class 2604 OID 10426289)
-- Name: r_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY reporte_info ALTER COLUMN r_id SET DEFAULT nextval('reporte_info_r_id_seq'::regclass);


--
-- TOC entry 2953 (class 2604 OID 10426267)
-- Name: r_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY rol ALTER COLUMN r_id SET DEFAULT nextval('rol_r_id_seq'::regclass);


--
-- TOC entry 2951 (class 2604 OID 10426245)
-- Name: u_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY usuario ALTER COLUMN u_id SET DEFAULT nextval('usuario_u_id_seq'::regclass);


--
-- TOC entry 2960 (class 2604 OID 11118275)
-- Name: u_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY usuario_info ALTER COLUMN u_id SET DEFAULT nextval('usuario_info_u_id_seq'::regclass);


--
-- TOC entry 2949 (class 2604 OID 10426229)
-- Name: v_id; Type: DEFAULT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY voto ALTER COLUMN v_id SET DEFAULT nextval('voto_v_id_seq'::regclass);


--
-- TOC entry 3119 (class 0 OID 10426253)
-- Dependencies: 188
-- Data for Name: categoria; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY categoria (c_id, c_nombre, c_descripcion) FROM stdin;
0	Ejemplo	Descripcion
\.


--
-- TOC entry 3157 (class 0 OID 0)
-- Dependencies: 187
-- Name: categoria_c_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('categoria_c_id_seq', 1, false);


--
-- TOC entry 3115 (class 0 OID 10426234)
-- Dependencies: 184
-- Data for Name: comentario; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY comentario (c_id, c_id_edificio, c_id_usuario, c_contenido, c_fecha) FROM stdin;
\.


--
-- TOC entry 3158 (class 0 OID 0)
-- Dependencies: 183
-- Name: comentario_c_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('comentario_c_id_seq', 1, false);


--
-- TOC entry 3132 (class 0 OID 10426328)
-- Dependencies: 201
-- Data for Name: discapacidad; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY discapacidad (d_id_usuario, d_id_discapacidad_info) FROM stdin;
\.


--
-- TOC entry 3134 (class 0 OID 10426333)
-- Dependencies: 203
-- Data for Name: discapacidad_info; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY discapacidad_info (d_id, d_tipo) FROM stdin;
1	tipo uno
\.


--
-- TOC entry 3159 (class 0 OID 0)
-- Dependencies: 202
-- Name: discapacidad_info_d_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('discapacidad_info_d_id_seq', 1, true);


--
-- TOC entry 3131 (class 0 OID 10426319)
-- Dependencies: 200
-- Data for Name: edificio; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY edificio (e_id, e_nombre, e_descripcion, e_id_reporte, e_id_categoria) FROM stdin;
\.


--
-- TOC entry 3160 (class 0 OID 0)
-- Dependencies: 199
-- Name: edificio_e_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('edificio_e_id_seq', 1, true);


--
-- TOC entry 3125 (class 0 OID 10426294)
-- Dependencies: 194
-- Data for Name: permiso; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY permiso (p_id, p_constante, p_descripcion) FROM stdin;
\.


--
-- TOC entry 3161 (class 0 OID 0)
-- Dependencies: 193
-- Name: permiso_p_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('permiso_p_id_seq', 1, false);


--
-- TOC entry 3127 (class 0 OID 10426305)
-- Dependencies: 196
-- Data for Name: permiso_por_rol; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY permiso_por_rol (p_id, p_id_rol) FROM stdin;
\.


--
-- TOC entry 3162 (class 0 OID 0)
-- Dependencies: 195
-- Name: permiso_por_rol_p_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('permiso_por_rol_p_id_seq', 1, false);


--
-- TOC entry 3129 (class 0 OID 10426311)
-- Dependencies: 198
-- Data for Name: reporte; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY reporte (r_id, r_id_edificio, r_fecha, r_calificacion) FROM stdin;
\.


--
-- TOC entry 3123 (class 0 OID 10426286)
-- Dependencies: 192
-- Data for Name: reporte_info; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY reporte_info (r_id, r_rampas, r_ascensores, r_pasamanos, r_pasillos, r_banos, r_entradas_salidas) FROM stdin;
\.


--
-- TOC entry 3163 (class 0 OID 0)
-- Dependencies: 191
-- Name: reporte_info_r_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('reporte_info_r_id_seq', 1, false);


--
-- TOC entry 3164 (class 0 OID 0)
-- Dependencies: 197
-- Name: reporte_r_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('reporte_r_id_seq', 1, false);


--
-- TOC entry 3121 (class 0 OID 10426264)
-- Dependencies: 190
-- Data for Name: rol; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY rol (r_id, r_constante, r_nombre) FROM stdin;
1	constante	role1
\.


--
-- TOC entry 3165 (class 0 OID 0)
-- Dependencies: 189
-- Name: rol_r_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('rol_r_id_seq', 1, true);


--
-- TOC entry 3117 (class 0 OID 10426242)
-- Dependencies: 186
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY usuario (u_id, u_usuario, u_password) FROM stdin;
1	claudia	01072015
2	Angel	123456
3	aiba	kgjh
17	aiba	asdfg
\.


--
-- TOC entry 3136 (class 0 OID 11118272)
-- Dependencies: 205
-- Data for Name: usuario_info; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY usuario_info (u_id, u_nombre, u_apellidos, u_mail, u_sexo, u_fecha_nacimiento, u_pais, u_tipo_discapacidad, u_porcentajediscapacidad, u_role, u_usuario) FROM stdin;
1	claudia	torres torres	clao@gmail.com	Femenino	16-07-1991	Ecuador	1	0%	1	1
2	Angel	Barragan	abgel@gmail.com	Masculino	3-12-1984	Ecuador	1	0%	1	2
3	Nataly	Barragan Arevalo	aiba@dddd.com	Masculino	2015-08-05	Argentina	1	10%	1	3
17	Nataly	Barragan Arevalo	aiba@dddd.com	Masculino	2014-01-29	Argentina	1	10%	1	\N
\.


--
-- TOC entry 3166 (class 0 OID 0)
-- Dependencies: 204
-- Name: usuario_info_u_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('usuario_info_u_id_seq', 17, true);


--
-- TOC entry 3167 (class 0 OID 0)
-- Dependencies: 185
-- Name: usuario_u_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('usuario_u_id_seq', 17, true);


--
-- TOC entry 3113 (class 0 OID 10426226)
-- Dependencies: 182
-- Data for Name: voto; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY voto (v_id, v_id_edificio, v_id_usuario, v_valoracion, v_fecha) FROM stdin;
\.


--
-- TOC entry 3168 (class 0 OID 0)
-- Dependencies: 181
-- Name: voto_v_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zripkhfignctym
--

SELECT pg_catalog.setval('voto_v_id_seq', 1, false);


--
-- TOC entry 2968 (class 2606 OID 10426261)
-- Name: pk_categoria_c_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY categoria
    ADD CONSTRAINT pk_categoria_c_id PRIMARY KEY (c_id);


--
-- TOC entry 2964 (class 2606 OID 10426239)
-- Name: pk_comentario_c_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY comentario
    ADD CONSTRAINT pk_comentario_c_id PRIMARY KEY (c_id);


--
-- TOC entry 2980 (class 2606 OID 10426338)
-- Name: pk_discapacidad_info_d_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY discapacidad_info
    ADD CONSTRAINT pk_discapacidad_info_d_id PRIMARY KEY (d_id);


--
-- TOC entry 2978 (class 2606 OID 10426327)
-- Name: pk_edificio_e_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY edificio
    ADD CONSTRAINT pk_edificio_e_id PRIMARY KEY (e_id);


--
-- TOC entry 2974 (class 2606 OID 10426302)
-- Name: pk_permiso_p_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY permiso
    ADD CONSTRAINT pk_permiso_p_id PRIMARY KEY (p_id);


--
-- TOC entry 2972 (class 2606 OID 10426291)
-- Name: pk_reporte_info_r_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY reporte_info
    ADD CONSTRAINT pk_reporte_info_r_id PRIMARY KEY (r_id);


--
-- TOC entry 2976 (class 2606 OID 10426316)
-- Name: pk_reporte_r_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY reporte
    ADD CONSTRAINT pk_reporte_r_id PRIMARY KEY (r_id);


--
-- TOC entry 2970 (class 2606 OID 10426272)
-- Name: pk_rol_r_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY rol
    ADD CONSTRAINT pk_rol_r_id PRIMARY KEY (r_id);


--
-- TOC entry 2982 (class 2606 OID 11118280)
-- Name: pk_usuario_info_u_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY usuario_info
    ADD CONSTRAINT pk_usuario_info_u_id PRIMARY KEY (u_id);


--
-- TOC entry 2966 (class 2606 OID 10426250)
-- Name: pk_usuario_u_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_usuario_u_id PRIMARY KEY (u_id);


--
-- TOC entry 2962 (class 2606 OID 10426231)
-- Name: pk_voto_v_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY voto
    ADD CONSTRAINT pk_voto_v_id PRIMARY KEY (v_id);


--
-- TOC entry 2985 (class 2606 OID 10426384)
-- Name: fk_comentario_c_id_edificio_edificio_e_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY comentario
    ADD CONSTRAINT fk_comentario_c_id_edificio_edificio_e_id FOREIGN KEY (c_id_edificio) REFERENCES edificio(e_id);


--
-- TOC entry 2986 (class 2606 OID 10426404)
-- Name: fk_comentario_c_id_usuario_usuario_u_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY comentario
    ADD CONSTRAINT fk_comentario_c_id_usuario_usuario_u_id FOREIGN KEY (c_id_usuario) REFERENCES usuario(u_id);


--
-- TOC entry 2994 (class 2606 OID 10426399)
-- Name: fk_discapacidad_d_id_discapacidad_info_discapacidad_info_d_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY discapacidad
    ADD CONSTRAINT fk_discapacidad_d_id_discapacidad_info_discapacidad_info_d_id FOREIGN KEY (d_id_discapacidad_info) REFERENCES discapacidad_info(d_id);


--
-- TOC entry 2993 (class 2606 OID 10426374)
-- Name: fk_discapacidad_d_id_usuario_usuario_u_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY discapacidad
    ADD CONSTRAINT fk_discapacidad_d_id_usuario_usuario_u_id FOREIGN KEY (d_id_usuario) REFERENCES usuario(u_id);


--
-- TOC entry 2991 (class 2606 OID 10426354)
-- Name: fk_edificio_e_id_categoria_categoria_c_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY edificio
    ADD CONSTRAINT fk_edificio_e_id_categoria_categoria_c_id FOREIGN KEY (e_id_categoria) REFERENCES categoria(c_id);


--
-- TOC entry 2992 (class 2606 OID 10426359)
-- Name: fk_edificio_e_id_reporte_reporte_r_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY edificio
    ADD CONSTRAINT fk_edificio_e_id_reporte_reporte_r_id FOREIGN KEY (e_id_reporte) REFERENCES reporte(r_id);


--
-- TOC entry 2989 (class 2606 OID 10426394)
-- Name: fk_permiso_por_rol_p_id_permiso_p_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY permiso_por_rol
    ADD CONSTRAINT fk_permiso_por_rol_p_id_permiso_p_id FOREIGN KEY (p_id) REFERENCES permiso(p_id);


--
-- TOC entry 2988 (class 2606 OID 10426379)
-- Name: fk_permiso_por_rol_p_id_rol_rol_r_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY permiso_por_rol
    ADD CONSTRAINT fk_permiso_por_rol_p_id_rol_rol_r_id FOREIGN KEY (p_id_rol) REFERENCES rol(r_id);


--
-- TOC entry 2987 (class 2606 OID 10426349)
-- Name: fk_reporte_info_r_id_reporte_r_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY reporte_info
    ADD CONSTRAINT fk_reporte_info_r_id_reporte_r_id FOREIGN KEY (r_id) REFERENCES reporte(r_id);


--
-- TOC entry 2990 (class 2606 OID 10426344)
-- Name: fk_reporte_r_id_edificio_edificio_e_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY reporte
    ADD CONSTRAINT fk_reporte_r_id_edificio_edificio_e_id FOREIGN KEY (r_id_edificio) REFERENCES edificio(e_id);


--
-- TOC entry 2995 (class 2606 OID 11118281)
-- Name: fk_usuario_info_u_role_rol_r_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY usuario_info
    ADD CONSTRAINT fk_usuario_info_u_role_rol_r_id FOREIGN KEY (u_role) REFERENCES rol(r_id);


--
-- TOC entry 2996 (class 2606 OID 11118286)
-- Name: fk_usuario_info_u_tipo_discapacidad_discapacidad_info_d_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY usuario_info
    ADD CONSTRAINT fk_usuario_info_u_tipo_discapacidad_discapacidad_info_d_id FOREIGN KEY (u_tipo_discapacidad) REFERENCES discapacidad_info(d_id);


--
-- TOC entry 2997 (class 2606 OID 12599724)
-- Name: fk_usuario_info_u_usuario; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY usuario_info
    ADD CONSTRAINT fk_usuario_info_u_usuario FOREIGN KEY (u_usuario) REFERENCES usuario(u_id);


--
-- TOC entry 2984 (class 2606 OID 10426364)
-- Name: fk_voto_v_id_edificio_edificio_e_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY voto
    ADD CONSTRAINT fk_voto_v_id_edificio_edificio_e_id FOREIGN KEY (v_id_edificio) REFERENCES edificio(e_id);


--
-- TOC entry 2983 (class 2606 OID 10426339)
-- Name: fk_voto_v_id_usuario_usuario_u_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY voto
    ADD CONSTRAINT fk_voto_v_id_usuario_usuario_u_id FOREIGN KEY (v_id_usuario) REFERENCES usuario(u_id);


--
-- TOC entry 3143 (class 0 OID 0)
-- Dependencies: 7
-- Name: public; Type: ACL; Schema: -; Owner: zripkhfignctym
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM zripkhfignctym;
GRANT ALL ON SCHEMA public TO zripkhfignctym;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-09-04 22:36:56

--
-- PostgreSQL database dump complete
--

