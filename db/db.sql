--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.3
-- Dumped by pg_dump version 9.5.1

-- Started on 2016-08-14 21:45:44

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
-- TOC entry 3097 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 182 (class 1259 OID 7862117)
-- Name: c_mments; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE c_mments (
    c_id character varying(250) NOT NULL,
    e_id character varying(250) NOT NULL,
    u_id character varying(250) NOT NULL,
    c_txt character varying(250) NOT NULL,
    c_date timestamp without time zone NOT NULL
);


ALTER TABLE c_mments OWNER TO zripkhfignctym;

--
-- TOC entry 186 (class 1259 OID 7862149)
-- Name: d_capacdes; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE d_capacdes (
    u_id character varying(250) NOT NULL,
    d_id character varying(250) NOT NULL
);


ALTER TABLE d_capacdes OWNER TO zripkhfignctym;

--
-- TOC entry 181 (class 1259 OID 7862114)
-- Name: d_capcdes_info; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE d_capcdes_info (
    d_id character varying(250),
    d_tipo character varying(250)
);


ALTER TABLE d_capcdes_info OWNER TO zripkhfignctym;

--
-- TOC entry 183 (class 1259 OID 7862125)
-- Name: e_cats; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE e_cats (
    e_cid character varying(250) NOT NULL,
    e_cname character varying(250) NOT NULL,
    e_cdscr character varying(250) NOT NULL
);


ALTER TABLE e_cats OWNER TO zripkhfignctym;

--
-- TOC entry 188 (class 1259 OID 7862162)
-- Name: e_ficios; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE e_ficios (
    e_id character varying(250) NOT NULL,
    e_name character varying(250) NOT NULL,
    e_dscr character varying(250),
    e_prcnt_accs character varying(250) NOT NULL,
    e_report character varying(250) NOT NULL,
    e_cid character varying(250) NOT NULL
);


ALTER TABLE e_ficios OWNER TO zripkhfignctym;

--
-- TOC entry 192 (class 1259 OID 7862186)
-- Name: p_rmisos; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE p_rmisos (
    p_id character varying(250) NOT NULL,
    p_const character varying(250) NOT NULL,
    p_dscr character varying(250) NOT NULL
);


ALTER TABLE p_rmisos OWNER TO zripkhfignctym;

--
-- TOC entry 191 (class 1259 OID 7862183)
-- Name: pxr; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE pxr (
    p_id character varying(250) NOT NULL,
    ur_id character varying(250) NOT NULL
);


ALTER TABLE pxr OWNER TO zripkhfignctym;

--
-- TOC entry 190 (class 1259 OID 7862178)
-- Name: r_nfo; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE r_nfo (
    r_id character varying(250) NOT NULL,
    r_rampas smallint NOT NULL,
    r_ascensores smallint NOT NULL,
    r_pasamanos smallint NOT NULL,
    r_pasillos smallint NOT NULL,
    "r_baños" smallint NOT NULL,
    r_entradas_salidas smallint NOT NULL
);


ALTER TABLE r_nfo OWNER TO zripkhfignctym;

--
-- TOC entry 193 (class 1259 OID 7862194)
-- Name: reportes; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE reportes (
    r_id character varying(250) NOT NULL,
    e_id character varying(250) NOT NULL,
    r_date timestamp without time zone NOT NULL,
    r_grade character varying(250) NOT NULL
);


ALTER TABLE reportes OWNER TO zripkhfignctym;

--
-- TOC entry 187 (class 1259 OID 7862154)
-- Name: u_rol; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE u_rol (
    ur_id character varying(250) NOT NULL,
    ur_const character varying(250) NOT NULL,
    ur_name character varying(250) NOT NULL
);


ALTER TABLE u_rol OWNER TO zripkhfignctym;

--
-- TOC entry 185 (class 1259 OID 7862141)
-- Name: u_sars; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE u_sars (
    u_id character varying(250) NOT NULL,
    u_name character varying(250) NOT NULL,
    u_scrt character varying(250) NOT NULL
);


ALTER TABLE u_sars OWNER TO zripkhfignctym;

--
-- TOC entry 184 (class 1259 OID 7862133)
-- Name: u_sars_nfo; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE u_sars_nfo (
    u_id character varying(250) NOT NULL,
    u_1name character varying(250) NOT NULL,
    u_2name character varying(250) NOT NULL,
    u_mail character varying(250) NOT NULL,
    u_sex character varying(250) NOT NULL,
    u_bdate character varying(250) NOT NULL,
    u_cntry character varying(250) NOT NULL,
    u_porcentajediscapacidad character varying(250) NOT NULL,
    u_role character varying(250) NOT NULL
);


ALTER TABLE u_sars_nfo OWNER TO zripkhfignctym;

--
-- TOC entry 189 (class 1259 OID 7862170)
-- Name: v_tes; Type: TABLE; Schema: public; Owner: zripkhfignctym
--

CREATE TABLE v_tes (
    v_id character varying(250) NOT NULL,
    e_id character varying(250) NOT NULL,
    u_id character varying(250) NOT NULL,
    v_val smallint NOT NULL,
    v_date timestamp without time zone NOT NULL
);


ALTER TABLE v_tes OWNER TO zripkhfignctym;

--
-- TOC entry 3078 (class 0 OID 7862117)
-- Dependencies: 182
-- Data for Name: c_mments; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY c_mments (c_id, e_id, u_id, c_txt, c_date) FROM stdin;
\.


--
-- TOC entry 3082 (class 0 OID 7862149)
-- Dependencies: 186
-- Data for Name: d_capacdes; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY d_capacdes (u_id, d_id) FROM stdin;
\.


--
-- TOC entry 3077 (class 0 OID 7862114)
-- Dependencies: 181
-- Data for Name: d_capcdes_info; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY d_capcdes_info (d_id, d_tipo) FROM stdin;
\.


--
-- TOC entry 3079 (class 0 OID 7862125)
-- Dependencies: 183
-- Data for Name: e_cats; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY e_cats (e_cid, e_cname, e_cdscr) FROM stdin;
\.


--
-- TOC entry 3084 (class 0 OID 7862162)
-- Dependencies: 188
-- Data for Name: e_ficios; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY e_ficios (e_id, e_name, e_dscr, e_prcnt_accs, e_report, e_cid) FROM stdin;
\.


--
-- TOC entry 3088 (class 0 OID 7862186)
-- Dependencies: 192
-- Data for Name: p_rmisos; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY p_rmisos (p_id, p_const, p_dscr) FROM stdin;
\.


--
-- TOC entry 3087 (class 0 OID 7862183)
-- Dependencies: 191
-- Data for Name: pxr; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY pxr (p_id, ur_id) FROM stdin;
\.


--
-- TOC entry 3086 (class 0 OID 7862178)
-- Dependencies: 190
-- Data for Name: r_nfo; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY r_nfo (r_id, r_rampas, r_ascensores, r_pasamanos, r_pasillos, "r_baños", r_entradas_salidas) FROM stdin;
\.


--
-- TOC entry 3089 (class 0 OID 7862194)
-- Dependencies: 193
-- Data for Name: reportes; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY reportes (r_id, e_id, r_date, r_grade) FROM stdin;
\.


--
-- TOC entry 3083 (class 0 OID 7862154)
-- Dependencies: 187
-- Data for Name: u_rol; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY u_rol (ur_id, ur_const, ur_name) FROM stdin;
\.


--
-- TOC entry 3081 (class 0 OID 7862141)
-- Dependencies: 185
-- Data for Name: u_sars; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY u_sars (u_id, u_name, u_scrt) FROM stdin;
\.


--
-- TOC entry 3080 (class 0 OID 7862133)
-- Dependencies: 184
-- Data for Name: u_sars_nfo; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY u_sars_nfo (u_id, u_1name, u_2name, u_mail, u_sex, u_bdate, u_cntry, u_porcentajediscapacidad, u_role) FROM stdin;
\.


--
-- TOC entry 3085 (class 0 OID 7862170)
-- Dependencies: 189
-- Data for Name: v_tes; Type: TABLE DATA; Schema: public; Owner: zripkhfignctym
--

COPY v_tes (v_id, e_id, u_id, v_val, v_date) FROM stdin;
\.


--
-- TOC entry 2929 (class 2606 OID 7862124)
-- Name: pk_c_mments_c_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY c_mments
    ADD CONSTRAINT pk_c_mments_c_id PRIMARY KEY (c_id);


--
-- TOC entry 2937 (class 2606 OID 7862153)
-- Name: pk_d_capacdes_d_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY d_capacdes
    ADD CONSTRAINT pk_d_capacdes_d_id PRIMARY KEY (d_id);


--
-- TOC entry 2931 (class 2606 OID 7862132)
-- Name: pk_e_cats_e_cid; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY e_cats
    ADD CONSTRAINT pk_e_cats_e_cid PRIMARY KEY (e_cid);


--
-- TOC entry 2941 (class 2606 OID 7862169)
-- Name: pk_e_ficios_e_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY e_ficios
    ADD CONSTRAINT pk_e_ficios_e_id PRIMARY KEY (e_id);


--
-- TOC entry 2947 (class 2606 OID 7862193)
-- Name: pk_p_rmisos_p_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY p_rmisos
    ADD CONSTRAINT pk_p_rmisos_p_id PRIMARY KEY (p_id);


--
-- TOC entry 2945 (class 2606 OID 7862182)
-- Name: pk_r_nfo_r_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY r_nfo
    ADD CONSTRAINT pk_r_nfo_r_id PRIMARY KEY (r_id);


--
-- TOC entry 2949 (class 2606 OID 7862201)
-- Name: pk_reportes_r_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY reportes
    ADD CONSTRAINT pk_reportes_r_id PRIMARY KEY (r_id);


--
-- TOC entry 2939 (class 2606 OID 7862161)
-- Name: pk_u_rol_ur_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY u_rol
    ADD CONSTRAINT pk_u_rol_ur_id PRIMARY KEY (ur_id);


--
-- TOC entry 2933 (class 2606 OID 7862140)
-- Name: pk_u_sars_nfo_u_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY u_sars_nfo
    ADD CONSTRAINT pk_u_sars_nfo_u_id PRIMARY KEY (u_id);


--
-- TOC entry 2935 (class 2606 OID 7862148)
-- Name: pk_u_sars_u_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY u_sars
    ADD CONSTRAINT pk_u_sars_u_id PRIMARY KEY (u_id);


--
-- TOC entry 2943 (class 2606 OID 7862177)
-- Name: pk_v_tes_v_id; Type: CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY v_tes
    ADD CONSTRAINT pk_v_tes_v_id PRIMARY KEY (v_id);


--
-- TOC entry 2952 (class 2606 OID 7862262)
-- Name: fk_c_mments_e_id_e_ficios_e_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY c_mments
    ADD CONSTRAINT fk_c_mments_e_id_e_ficios_e_id FOREIGN KEY (e_id) REFERENCES e_ficios(e_id);


--
-- TOC entry 2951 (class 2606 OID 7862202)
-- Name: fk_c_mments_u_id_u_sars_u_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY c_mments
    ADD CONSTRAINT fk_c_mments_u_id_u_sars_u_id FOREIGN KEY (u_id) REFERENCES u_sars(u_id);


--
-- TOC entry 2954 (class 2606 OID 7862247)
-- Name: fk_d_capacdes_u_id_u_sars_u_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY d_capacdes
    ADD CONSTRAINT fk_d_capacdes_u_id_u_sars_u_id FOREIGN KEY (u_id) REFERENCES u_sars(u_id);


--
-- TOC entry 2950 (class 2606 OID 7862237)
-- Name: fk_d_capcdes_info_d_id_d_capacdes_d_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY d_capcdes_info
    ADD CONSTRAINT fk_d_capcdes_info_d_id_d_capacdes_d_id FOREIGN KEY (d_id) REFERENCES d_capacdes(d_id);


--
-- TOC entry 2955 (class 2606 OID 7862222)
-- Name: fk_e_ficios_e_cid_e_cats_e_cid; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY e_ficios
    ADD CONSTRAINT fk_e_ficios_e_cid_e_cats_e_cid FOREIGN KEY (e_cid) REFERENCES e_cats(e_cid);


--
-- TOC entry 2956 (class 2606 OID 7862227)
-- Name: fk_e_ficios_e_report_reportes_r_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY e_ficios
    ADD CONSTRAINT fk_e_ficios_e_report_reportes_r_id FOREIGN KEY (e_report) REFERENCES reportes(r_id);


--
-- TOC entry 2961 (class 2606 OID 7862257)
-- Name: fk_pxr_p_id_p_rmisos_p_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY pxr
    ADD CONSTRAINT fk_pxr_p_id_p_rmisos_p_id FOREIGN KEY (p_id) REFERENCES p_rmisos(p_id);


--
-- TOC entry 2960 (class 2606 OID 7862252)
-- Name: fk_pxr_ur_id_u_rol_ur_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY pxr
    ADD CONSTRAINT fk_pxr_ur_id_u_rol_ur_id FOREIGN KEY (ur_id) REFERENCES u_rol(ur_id);


--
-- TOC entry 2959 (class 2606 OID 7862217)
-- Name: fk_r_nfo_r_id_reportes_r_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY r_nfo
    ADD CONSTRAINT fk_r_nfo_r_id_reportes_r_id FOREIGN KEY (r_id) REFERENCES reportes(r_id);


--
-- TOC entry 2962 (class 2606 OID 7862212)
-- Name: fk_reportes_e_id_e_ficios_e_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY reportes
    ADD CONSTRAINT fk_reportes_e_id_e_ficios_e_id FOREIGN KEY (e_id) REFERENCES e_ficios(e_id);


--
-- TOC entry 2953 (class 2606 OID 7862242)
-- Name: fk_u_sars_nfo_u_id_u_sars_u_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY u_sars_nfo
    ADD CONSTRAINT fk_u_sars_nfo_u_id_u_sars_u_id FOREIGN KEY (u_id) REFERENCES u_sars(u_id);


--
-- TOC entry 2958 (class 2606 OID 7862232)
-- Name: fk_v_tes_e_id_e_ficios_e_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY v_tes
    ADD CONSTRAINT fk_v_tes_e_id_e_ficios_e_id FOREIGN KEY (e_id) REFERENCES e_ficios(e_id);


--
-- TOC entry 2957 (class 2606 OID 7862207)
-- Name: fk_v_tes_u_id_u_sars_u_id; Type: FK CONSTRAINT; Schema: public; Owner: zripkhfignctym
--

ALTER TABLE ONLY v_tes
    ADD CONSTRAINT fk_v_tes_u_id_u_sars_u_id FOREIGN KEY (u_id) REFERENCES u_sars(u_id);


--
-- TOC entry 3096 (class 0 OID 0)
-- Dependencies: 7
-- Name: public; Type: ACL; Schema: -; Owner: zripkhfignctym
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM zripkhfignctym;
GRANT ALL ON SCHEMA public TO zripkhfignctym;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-08-14 21:46:12

--
-- PostgreSQL database dump complete
--

