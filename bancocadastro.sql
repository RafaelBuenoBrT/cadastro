PGDMP     $    0                w            bancocadastro    11.2    11.2     �
           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �
           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �
           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false                        1262    16493    bancocadastro    DATABASE     �   CREATE DATABASE bancocadastro WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Portuguese_Brazil.1252' LC_CTYPE = 'Portuguese_Brazil.1252';
    DROP DATABASE bancocadastro;
             postgres    false            �            1259    16496    pessoa    TABLE     �   CREATE TABLE public.pessoa (
    id integer NOT NULL,
    nome character varying(250),
    telefone character varying(14),
    cpf character varying(14),
    datanascimento date,
    sexo character varying(1)
);
    DROP TABLE public.pessoa;
       public         postgres    false            �            1259    16494    pessoa_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pessoa_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.pessoa_id_seq;
       public       postgres    false    197                       0    0    pessoa_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.pessoa_id_seq OWNED BY public.pessoa.id;
            public       postgres    false    196            }
           2604    16499 	   pessoa id    DEFAULT     f   ALTER TABLE ONLY public.pessoa ALTER COLUMN id SET DEFAULT nextval('public.pessoa_id_seq'::regclass);
 8   ALTER TABLE public.pessoa ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    196    197            �
          0    16496    pessoa 
   TABLE DATA               O   COPY public.pessoa (id, nome, telefone, cpf, datanascimento, sexo) FROM stdin;
    public       postgres    false    197   �
                  0    0    pessoa_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.pessoa_id_seq', 1, false);
            public       postgres    false    196            
           2606    16501 	   pessoa id 
   CONSTRAINT     G   ALTER TABLE ONLY public.pessoa
    ADD CONSTRAINT id PRIMARY KEY (id);
 3   ALTER TABLE ONLY public.pessoa DROP CONSTRAINT id;
       public         postgres    false    197            �
      x������ � �     