<?php
session_start();
require_once './config/pdo.php';
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ComparOpérator</title>
</head>

<body>

    <div class="container">
        <div class="margin-t-24 cgv-module">
            <h2 class="line text-center">
                <span>
                    <br>
                    <br>
                    <span class="icon-cgv bold"></span>
                    Conditions Générales de Vente </span>
                    <br>
                    <br>
                    <br>
            </h2>

            <div class="row">
                <div class="small-12 columns text-justify">
                    <p>La combinaison de services de voyage qui vous est proposée est un forfait au sens de la directive (UE) 2015/2302 et de
                        l'article L.211-2 II du code du tourisme. Vous bénéficierez donc de tous les droits octroyés par l'Union européenne
                        applicables aux forfaits, tels que transposés dans le code du tourisme.<br>
                        Les entreprises qui vous proposent ces offres seront entièrement responsables de la bonne exécution du forfait dans
                        son ensemble. En outre, comme l'exige la loi, ces entreprises doivent disposer d'une protection afin de rembourser vos
                        paiements et, si le transport est compris dans le forfait, d'assurer votre rapatriement au cas où elles deviendraient
                        insolvables.</p>
                    <p>Pour plus d'informations sur les droits essentiels au titre de la directive (UE) 2015/2302 veuillez cliquer sur le lien
                        suivant (ou copier/coller cette adresse dans votre navigateur) :
                        <a href="https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000031632248/">https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000031632248/</a>
                    </p>
                    <p>Décret n° 2017-1871 du 29 décembre 2017 pris pour l'application de l'ordonnance n° 2017-1717 du 20 décembre 2017
                        portant transposition de la directive (UE) 2015/2302 du Parlement européen et du Conseil du 25 novembre 2015
                        relative aux voyages à forfait et aux prestations de voyage liées.</p>
                    <p>Section 2 <br>
                        Contrat de vente de voyages et de séjours<br><br>
                        <b>Art. R. 211-3. -</b> Toute offre et toute vente des prestations mentionnées à l'article L. 211-1 donnent lieu à la remise de
                        documents appropriés qui répondent aux règles définies par la présente section.
                    </p>
                    <p><b>Art. R. 211-3-1. -</b> L'échange d'informations pré contractuelles ou la mise à disposition des conditions contractuelles est
                        effectué par écrit. Ils peuvent se faire par voie électronique. Sont mentionnés le nom ou la raison sociale et l'adresse
                        de l'organisateur ou du détaillant ainsi que l'indication de son immatriculation au registre prévu à l'article L. 141-3 ou,
                        le cas échéant, le nom, l'adresse et l'indication de l'immatriculation de la fédération ou de l'union mentionnées au
                        deuxième alinéa de l'article R. 211-2.</p>
                    <p><b>Art. L. 211-1.</b> <br>
                        <b>I.</b>- Le présent chapitre s'applique aux personnes physiques ou morales qui élaborent et vendent ou offrent
                        à la vente dans le cadre de leur activité commerciale, industrielle, artisanale ou libérale :
                        <span class="list-container">
                            <span class="list">1° Des forfaits touristiques ;</span>
                            <span class="list">2° Des services de voyage portant sur le transport, le logement, la location d'un véhicule ou d'autres services de voyage
                                qu'elles ne produisent pas elles-mêmes.</span>
                        </span>
                        Il s'applique également aux professionnels qui facilitent aux voyageurs l'achat de prestations de voyage liées au sens de
                        l'article L. 211-2.<br>
                        <b>II.</b>- Les organismes locaux de tourisme bénéficiant du soutien de l'État, des collectivités territoriales ou de leurs
                        groupements peuvent se livrer ou apporter leur concours, dans l'intérêt général, à des opérations mentionnées au I, dès
                        lors que celles-ci permettent de faciliter l'accueil ou d'améliorer les conditions de séjour des touristes dans leur zone
                        géographique d'intervention.<br>
                        <b>III.</b>- Le présent chapitre s'applique aux personnes physiques ou morales qui émettent des bons ou coffrets permettant
                        d'acquitter le prix de l'une des prestations mentionnées au I. Il ne s'applique pas aux personnes physiques ou morales
                        qui n'effectuent que la vente de ces bons ou coffrets.<br>
                        <b>IV.</b>- Le présent chapitre n'est pas applicable aux personnes qui ne proposent des forfaits, des services de voyage ou ne
                        facilitent la conclusion de prestations de voyage liées qu'à titre occasionnel, dans un but non lucratif et pour un groupe
                        limité de voyageurs uniquement.<br>
                        <b>V.</b>- Le présent chapitre ne s'applique pas aux personnes suivantes, sauf en ce qui concerne l'organisation, la vente ou
                        l'offre à la vente de forfaits ou lorsqu'elles facilitent l'achat de prestations de voyage liées :
                        <span class="list-container">
                            <span class="list">1° Aux personnes physiques ou morales qui n'effectuent que la délivrance de titres de transport terrestre pour le
                                compte d'un ou de plusieurs transporteurs de voyageurs ;</span>
                            <span class="list">2° Aux transporteurs aériens qui n'effectuent que la délivrance de titres de transport aérien ou de titres de transports
                                consécutifs incluant un parcours de transport aérien et, à titre accessoire, un ou plusieurs parcours de transport
                                terrestre assurés par un ou plusieurs transporteurs de voyageurs ;</span>
                            <span class="list">3° Aux transporteurs ferroviaires qui n'effectuent que la délivrance de titres de transport ferroviaire ou de titres de
                                transports consécutifs incluant un parcours de transport ferroviaire et, à titre accessoire, d'autres parcours de transport
                                terrestre ou aérien assurés par un ou plusieurs transporteurs de voyageurs ;</span>
                            <span class="list">4° Aux personnes physiques ou morales titulaires d'une carte professionnelle délivrée en application de la loi n° 70-9 du
                                2 janvier 1970 réglementant les conditions d'exercice des activités relatives à certaines opérations portant sur les
                                immeubles et les fonds de commerce, lorsqu'elles ne réalisent les opérations mentionnées au 2° du I qu'à titre
                                accessoire. Ces personnes doivent souscrire, pour la réalisation de ces opérations, une assurance garantissant les
                                conséquences pécuniaires de la responsabilité professionnelle et une garantie financière permettant le remboursement
                                des fonds déposés.</span>
                        </span>
                    </p>
                    <p><b>Art. R. 211-4. -</b> Préalablement à la conclusion du contrat, l'organisateur ou le détaillant doit communiquer au voyageur
                        les informations suivantes :
                        <span class="list-container">
                            <span class="list">1° Les caractéristiques principales des services de voyage : <br>
                                <span class="under-list">
                                    a) La ou les destinations, l'itinéraire et les périodes de séjour, avec les dates et, lorsque le logement est compris, le
                                    nombre de nuitées comprises ; <br>
                                    b) Les moyens, caractéristiques et catégories de transport, les lieux, dates et heures de départ et de retour, la durée et
                                    le lieu des escales et des correspondances. Lorsque l'heure exacte n'est pas encore fixée, l'organisateur ou le détaillant
                                    informe le voyageur de l'heure approximative du départ et du retour ; <br>
                                    c) La situation, les principales caractéristiques et, s'il y a lieu, la catégorie touristique de l'hébergement en vertu des
                                    règles du pays de destination ; <br>
                                    d) Les repas fournis ; <br>
                                    e) Les visites, les excursions ou les autres services compris dans le prix total convenu pour le contrat ; <br>
                                    f) Lorsque cela ne ressort pas du contexte, si les services de voyage éventuels seront fournis au voyageur en tant que
                                    membre d'un groupe et, dans ce cas, si possible, la taille approximative du groupe ; <br>
                                    g) Lorsque le bénéfice d'autres services touristiques fournis au voyageur repose sur une communication verbale
                                    efficace, la langue dans laquelle ces services seront fournis ; <br>
                                    h) Des informations sur le fait de savoir si le voyage ou le séjour de vacances est, d'une manière générale, adapté aux
                                    personnes à mobilité réduite et, à la demande du voyageur, des informations précises sur l'adéquation du voyage ou
                                    du séjour de vacances aux besoins du voyageur ;
                                </span>
                            </span>
                            <span class="list">2° La dénomination sociale et l'adresse géographique de l'organisateur et du détaillant, ainsi que leurs coordonnées
                                téléphoniques et, s'il y a lieu, électroniques ;</span>
                            <span class="list">3° Le prix total incluant les taxes et, s'il y a lieu, tous les frais, redevances ou autres coûts supplémentaires, ou, quand
                                ceux-ci ne peuvent être raisonnablement calculés avant la conclusion du contrat, une indication du type de coûts
                                additionnels que le voyageur peut encore avoir à supporter ; </span>
                            <span class="list">4° Les modalités de paiement, y compris le montant ou le pourcentage du prix à verser à titre d'acompte et le
                                calendrier pour le paiement du solde, ou les garanties financières à verser ou à fournir par le voyageur ; </span>
                            <span class="list">5° Le nombre minimal de personnes requis pour la réalisation du voyage ou du séjour et la date limite mentionnée au
                                III de l'article L. 211-14 précédant le début du voyage ou du séjour pour une éventuelle résolution du contrat au cas où
                                ce nombre ne serait pas atteint ; </span>
                            <span class="list">6° Des informations d'ordre général concernant les conditions applicables en matière de passeports et de visas, y
                                compris la durée approximative d'obtention des visas, ainsi que des renseignements sur les formalités sanitaires, du
                                pays de destination ; </span>
                            <span class="list">7° Une mention indiquant que le voyageur peut résoudre le contrat à tout moment avant le début du voyage ou du
                                séjour, moyennant le paiement de frais de résolution appropriés ou, le cas échéant, de frais de résolution standard
                                réclamés par l'organisateur ou le détaillant, conformément au I de l'article L. 211-14 ; </span>
                            <span class="list">8° Des informations sur les assurances obligatoires ou facultatives couvrant les frais de résolution du contrat par le
                                voyageur ou sur le coût d'une assistance, couvrant le rapatriement, en cas d'accident, de maladie ou de décès. </span>
                        </span>
                        En ce qui concerne les forfaits définis au e du 2° du A du II de l'article L. 211-2, l'organisateur ou le détaillant et le
                        professionnel auxquels les données sont transmises veillent à ce que chacun d'eux fournisse, avant que le voyageur ne
                        soit lié par un contrat, les informations énumérées au présent article dans la mesure où celles-ci sont pertinentes pour
                        les services de voyage qu'ils offrent.<br>
                        Le formulaire par lequel les informations énumérées au présent article sont portées à la connaissance du voyageur est
                        fixé par arrêté conjoint du ministre chargé du tourisme et du ministre chargé de l'économie et des finances. Cet arrêté
                        précise les informations minimales à porter à la connaissance du voyageur lorsque le contrat est conclu par téléphone.
                    </p>
                    <p><b>Art. L. 211-2.</b> <br>
                        <b>I.</b>- Constitue un service de voyage :<br>
                        <span class="list-container">
                            <span class="list">1° Le transport de passagers ;</span>
                            <span class="list">2° L'hébergement qui ne fait pas partie intégrante du transport de passagers et qui n'a pas un objectif résidentiel ;</span>
                            <span class="list">3° La location de voitures particulières, d'autres véhicules de catégorie M au sens de l'article R. 311-1 du code de la
                                route ayant une vitesse maximale par construction supérieure à 25 km/ h ou de motocyclettes au sens de l'article R.
                                311-1 du code de la route dont la conduite nécessite la possession d'un permis de conduire de catégorie A
                                conformément aux dispositions de l'article R. 221-4 de ce même code ;</span>
                            <span class="list">4° Tout autre service touristique qui ne fait pas partie intégrante d'un service de voyage au sens des 1°, 2° ou 3°.</span>
                        </span>
                        <b>II.</b>- A.- Constitue un forfait touristique la combinaison d'au moins deux types différents de services de voyage aux fins du
                        même voyage ou séjour de vacances, dépassant vingt-quatre heures ou incluant une nuitée, si :
                        <span class="list-container">
                            <span class="list">1° Ces services sont combinés par un seul professionnel, y compris à la demande du voyageur ou conformément à son
                                choix, avant qu'un contrat unique incluant tous ces services ne soit conclu ;</span>
                            <span class="list">2° Indépendamment de l'éventuelle conclusion de contrats séparés avec des prestataires de services de voyage
                                individuels, ces services sont :<br>
                                <span class="under-list">
                                    a) Soit achetés auprès d'un seul point de vente et choisis avant que le voyageur n'accepte de payer ; <br>
                                    b) Soit proposés, vendus ou facturés à un prix tout compris ou à un prix total ; <br>
                                    c) Soit annoncés ou vendus sous la dénomination de "forfait" ou sous une dénomination similaire ; <br>
                                    d) Soit combinés après la conclusion d'un contrat par lequel un professionnel autorise le voyageur à choisir parmi une
                                    sélection de différents types de services de voyage ; <br>
                                    e) Soit achetés auprès de professionnels distincts grâce à des procédures de réservation en ligne liées, lorsque le nom
                                    du voyageur, les modalités de paiement et l'adresse électronique sont transmis par le professionnel avec lequel le
                                    premier contrat est conclu à un ou plusieurs autres professionnels et lorsqu'un contrat avec ce ou ces derniers est
                                    conclu au plus tard vingt-quatre heures après la confirmation de la réservation du premier service de voyage.
                                </span>
                            </span>
                        </span>
                        B.- Les combinaisons de services de voyage dans lesquelles un seul des types de service de voyage mentionnés au 1°, au
                        2°, ou au 3° du I est combiné à un ou plusieurs des services touristiques mentionnés au 4° du I ne constituent pas un
                        forfait si ces derniers services :
                        <span class="list-container">
                            <span class="list">1° Ne représentent pas une part significative de la valeur de la combinaison, ne sont pas annoncés comme étant une
                                caractéristique essentielle de la combinaison ou ne constituent pas d'une manière ou d'une autre une telle
                                caractéristique, ou</span>
                            <span class="list">2° Sont choisis et achetés uniquement après que l'exécution d'un service de voyage mentionné au 1°, au 2° ou au 3° du I
                                a commencé.</span>
                        </span>
                        <b>III.</b>- Constitue une prestation de voyage liée la combinaison d'au moins deux types différents de services de voyage
                        achetés aux fins du même voyage ou séjour de vacances, couvrant au moins vingt-quatre heures ou une nuitée, ne
                        constituant pas un forfait et entraînant la conclusion de contrats séparés avec des prestataires de services de voyage
                        individuels, si un professionnel facilite :
                        <span class="list-container">
                            <span class="list">1° A l'occasion d'une seule visite à son point de vente ou d'une seule prise de contact avec celui-ci, le choix séparé et le
                                paiement séparé de chaque service de voyage par les voyageurs ou</span>
                            <span class="list">2° D'une manière ciblée, l'achat d'au moins un service de voyage supplémentaire auprès d'un autre professionnel
                                lorsque le contrat avec cet autre professionnel est conclu au plus tard vingt-quatre heures après la confirmation de la
                                réservation du premier service de voyage.</span>
                        </span>
                        Lorsqu'il est acheté un seul des types de service de voyage mentionnés au 1°, au 2° ou au 3° du I et un ou plusieurs des
                        services touristiques mentionnés au 4° du I, ceux-ci ne constituent pas une prestation de voyage liée si ces derniers
                        services ne représentent pas une part significative de la valeur combinée des services et ne sont pas annoncés comme
                        étant une caractéristique essentielle du voyage ou séjour de vacances ou ne constituent pas d'une manière ou d'une
                        autre une telle caractéristique.<br>
                        <b>IV.</b>- Pour l'application du présent chapitre, le voyageur est une personne cherchant à conclure un contrat relevant du
                        champ d'application du présent chapitre ou ayant le droit de voyager sur la base d'un tel contrat déjà conclu.<br>
                        Un professionnel est une personne physique ou morale, qu'elle soit publique ou privée, qui agit, y compris par
                        l'intermédiaire d'une autre personne agissant en son nom ou pour son compte, aux fins qui entrent dans le cadre de son
                        activité commerciale, industrielle, artisanale ou libérale en ce qui concerne des contrats relevant du présent chapitre,
                        qu'elle agisse en qualité d'organisateur, de détaillant, de professionnel facilitant une prestation de voyage liée ou de
                        prestataire d'un service de voyage.<br>
                        Un organisateur est un professionnel qui élabore des forfaits touristiques et les vend ou les offre à la vente, directement
                        ou par l'intermédiaire d'un autre professionnel ou encore conjointement avec un autre professionnel, ou un
                        professionnel qui transmet les données du voyageur à un autre professionnel conformément au e du 2° du A du II.<br>
                        Un détaillant est un professionnel autre que l'organisateur, qui vend ou offre à la vente des forfaits élaborés par un
                        organisateur ou des services de voyage assurés par un autre professionnel.<br>
                        <b>V.</b>- Pour l'application du présent chapitre, on entend par :
                        <span class="list-container">
                            <span class="list">1° Point de vente : tout site commercial, qu'il soit meuble ou immeuble, ou un site internet commercial ou une structure
                                de vente en ligne similaire, y compris lorsque des sites internet commerciaux ou des structures de vente en ligne sont
                                présentés aux voyageurs comme une structure unique, y compris un service téléphonique ;</span>
                            <span class="list">2° Support durable : tout instrument permettant au voyageur ou au professionnel de stocker des informations qui lui
                                sont adressées personnellement d'une manière permettant de s'y reporter ultérieurement pendant un laps de temps
                                adapté aux fins auxquelles les informations sont destinées et qui permet la reproduction à l'identique des informations
                                stockées ;</span>
                            <span class="list">3° Circonstances exceptionnelles et inévitables : une situation échappant au contrôle de la partie qui invoque cette
                                situation et dont les conséquences n'auraient pu être évitées même si toutes les mesures raisonnables avaient été
                                prises.</span>
                        </span>
                    </p>
                    <p><b>Art. R. 211-5. -</b> Les informations mentionnées aux 1°, 3°, 4°, 5° et 7° de l'article R. 211-4 communiquées au voyageur
                        font partie du contrat et ne peuvent être modifiées que dans les conditions définies à l'article L. 211-9</p>
                    <p><b>Art. L. 211-9. -</b> Les informations pré contractuelles communiquées au voyageur font partie intégrante du contrat et ne
                        peuvent pas être modifiées, sauf si les parties contractantes en conviennent expressément autrement. L'organisateur
                        ou le détaillant communique toutes les modifications relatives aux informations pré contractuelles au voyageur, de
                        façon claire, compréhensible et apparente, avant la conclusion du contrat.</p>
                    <p><b>Art. R. 211-6. -</b> Le contrat doit comporter, outre les informations définies à l'article R. 211-4, les informations suivantes :
                        <span class="list-container">
                            <span class="list">1° Les exigences particulières du voyageur que l'organisateur ou le détaillant a acceptées ; </span>
                            <span class="list">2° Une mention indiquant que l'organisateur ainsi que le détaillant sont responsables de la bonne exécution de tous
                                les services de voyage compris dans le contrat conformément à l'article L. 211-16 et qu'ils sont tenus d'apporter une
                                aide au voyageur s'il est en difficulté, conformément à l'article L. 211-17-1 ; </span>
                            <span class="list">3° Le nom de l'entité chargée de la protection contre l'insolvabilité et ses coordonnées, dont son adresse géographique ; </span>
                            <span class="list">4° Le nom, l'adresse, le numéro de téléphone, l'adresse électronique et, le cas échéant, le numéro de télécopieur du
                                représentant local de l'organisateur ou du détaillant, d'un point de contact ou d'un autre service par l'intermédiaire
                                duquel le voyageur peut contacter rapidement l'organisateur ou le détaillant et communiquer avec lui de manière
                                efficace, demander une aide si le voyageur est en difficulté ou se plaindre de toute non-conformité constatée lors de
                                l'exécution du voyage ou du séjour ; </span>
                            <span class="list">5° Une mention indiquant que le voyageur est tenu de communiquer toute non-conformité qu'il constate lors de
                                l'exécution du voyage ou du séjour conformément au II de l'article L. 211-16 ; </span>
                            <span class="list">6° Lorsque des mineurs, non accompagnés par un parent ou une autre personne autorisée, voyagent sur la base d'un
                                contrat comprenant un hébergement, des informations permettant d'établir un contact direct avec le mineur ou la
                                personne responsable du mineur sur le lieu de séjour du mineur ; </span>
                            <span class="list">7° Des informations sur les procédures internes de traitement des plaintes disponibles et sur les mécanismes de
                                règlement extrajudiciaire des litiges et, s'il y a lieu, sur l'entité dont relève le professionnel et sur la plateforme de
                                règlement en ligne des litiges prévue par le règlement (UE) n° 524/2013 du Parlement européen et du Conseil ; </span>
                            <span class="list">8° Des informations sur le droit du voyageur de céder le contrat à un autre voyageur conformément à l'article L.
                                211-11.</span>
                        </span>
                        En ce qui concerne les forfaits définis au e du 2° du A du II de l'article L. 211-2, le professionnel auquel les données
                        sont transmises informe l'organisateur ou le détaillant de la conclusion du contrat donnant lieu à la création d'un
                        forfait. Le professionnel lui fournit les informations nécessaires pour lui permettre de s'acquitter de ses obligations en
                        tant qu'organisateur. Dès que l'organisateur ou le détaillant est informé de la création d'un forfait, il fournit au
                        voyageur, sur un support durable, les informations mentionnées aux 1° à 8°.
                    </p>
                    <p><b>Art. R. 211-7. -</b> Le voyageur peut céder son contrat à un cessionnaire qui remplit les mêmes conditions que lui pour
                        effectuer le voyage ou le séjour, tant que ce contrat n'a produit aucun effet. <br>
                        Sauf stipulation plus favorable au cédant, celui-ci est tenu d'informer l'organisateur ou le détaillant de sa décision par
                        tout moyen permettant d'en obtenir un accusé de réception au plus tard sept jours avant le début du voyage. Cette
                        cession n'est soumise, en aucun cas, à une autorisation préalable de l'organisateur ou du détaillant.</p>
                    <p><b>Art. R. 211-8. -</b> Lorsque le contrat comporte une possibilité expresse de révision du prix, dans les limites prévues à
                        l'article L. 211-12, il mentionne les modalités précises de calcul, tant à la hausse qu'à la baisse, des variations des prix,
                        notamment le montant des frais de transport et taxes y afférentes, la ou les devises qui peuvent avoir une incidence
                        sur le prix du voyage ou du séjour, la part du prix à laquelle s'applique la variation, ainsi que le cours de la ou des
                        devises retenu comme référence lors de l'établissement du prix figurant au contrat. <br>
                        En cas de diminution du prix, l'organisateur ou le détaillant a le droit de déduire ses dépenses administratives réelles
                        du remboursement dû au voyageur. A la demande du voyageur, l'organisateur ou le détaillant apporte la preuve de ces
                        dépenses administratives.</p>
                    <p><b>Art. R. 211-9. -</b> Lorsque, avant le départ du voyageur, l'organisateur ou le détaillant se trouve contraint d'apporter une
                        modification à l'un des éléments essentiels du contrat, s'il ne peut pas satisfaire aux exigences particulières
                        mentionnées au 1° de l'article R. 211-6, ou en cas de hausse du prix supérieure à 8 %, il informe le voyageur dans les
                        meilleurs délais, d'une manière claire, compréhensible et apparente, sur un support durable :
                        <span class="list-container">
                            <span class="list">1° Des modifications proposées et, s'il y a lieu, de leurs répercussions sur le prix du voyage ou du séjour ; </span>
                            <span class="list">2° Du délai raisonnable dans lequel le voyageur doit communiquer à l'organisateur ou au détaillant la décision qu'il
                                prend ;</span>
                            <span class="list">3° Des conséquences de l'absence de réponse du voyageur dans le délai fixé ; </span>
                            <span class="list">4° S'il y a lieu, de l'autre prestation proposée, ainsi que de son prix. </span>
                        </span>
                        Lorsque les modifications du contrat ou la prestation de substitution entraînent une baisse de qualité du voyage ou du
                        séjour ou de son coût, le voyageur a droit à une réduction de prix adéquate. <br>
                        Si le contrat est résolu et le voyageur n'accepte pas d'autre prestation, l'organisateur ou le détaillant rembourse tous
                        les paiements effectués par le voyageur ou en son nom dans les meilleurs délais et en tout état de cause au plus tard
                        quatorze jours après la résolution du contrat, sans préjudice d'un dédommagement en application de l'article L.
                        211-17.
                    </p>
                    <p><b>Art. R. 211-10. -</b> L'organisateur ou le détaillant procède aux remboursements requis en vertu des II et III de l'article L.
                        211-14 ou, au titre du I de l'article L. 211-14, rembourse tous les paiements effectués par le voyageur ou en son nom
                        moins les frais de résolution appropriés. Ces remboursements au profit du voyageur sont effectués dans les meilleurs
                        délais et en tout état de cause dans les quatorze jours au plus tard après la résolution du contrat. <br>
                        Dans le cas prévu au III de l'article L. 211-14, l'indemnisation supplémentaire que le voyageur est susceptible de
                        recevoir est au moins égale à la pénalité qu'il aurait supportée si l'annulation était intervenue de son fait à cette date.</p>
                    <p><b>Art. R. 211-11. -</b> L'aide due par l'organisateur ou le détaillant en application de l'article L. 211-17-1 consiste notamment :
                        <span class="list-container">
                            <span class="list">1° A fournir des informations utiles sur les services de santé, les autorités locales et l'assistance consulaire ; </span>
                            <span class="list">2° A aider le voyageur à effectuer des communications longue distance et à trouver d'autres prestations de voyage.</span>
                        </span>
                        L'organisateur ou le détaillant est en droit de facturer un prix raisonnable pour cette aide si cette difficulté est causée
                        de façon intentionnelle par le voyageur ou par sa négligence. Le prix facturé ne dépasse en aucun cas les coûts réels
                        supportés par l'organisateur ou le détaillant.
                    </p>
                    <br>
                    <h3>L'ANNULATION PAR LE VOYAGEUR</h3>
                    <p>Les voyageurs peuvent résoudre le contrat sans payer de frais de résolution avant le début du forfait en cas de
                        circonstances exceptionnelles, par exemple s'il existe des problèmes graves pour la sécurité au lieu de destination qui
                        sont susceptibles d'affecter le forfait. En outre, les voyageurs peuvent, à tout moment avant le début du forfait,
                        résoudre le contrat moyennant le paiement de frais de résolution appropriés et justifiables.<br><br>
                        Conformément à l'article L221-28 du Code de la consommation, le présent contrat n'est pas soumis au droit de
                        rétractation.<br><br>
                        Toutefois, le voyageur peut résoudre le contrat à tout moment avant le début du voyage et s'acquittera des frais fixés
                        soit selon un barème d'annulation (sur le prix total du voyage ) fixé par l'agence de voyage et renseigné dans les
                        conditions particulières de vente, soit selon un calcul des frais réels d'annulation supportés par l'organisateur et/ou
                        l'agent de voyage.</p>
                    <br>
                    <h3>L'ANNULATION PAR L'AGENCE DE VOYAGE OU L'ORGANISATEUR</h3>
                    <p>Le voyage peut être annulé par l'organisateur ou l'agence si le nombre minimum de participants renseignés dans les
                        conditions particulières de vente n'est pas inscrit :<br>
                        20 jours avant la date de départ, pour les voyages dont la durée dépasse 6 jours. <br>
                        7 jours avant la date de départ, pour les voyages dont la durée est de 2 à 6 jours. <br>
                        48h avant la date de départ, pour les voyages dont la durée est 2 jours. <br>
                        Le Voyageur sera alors remboursé de toutes les sommes qu'il aura pu verser mais ne pourra pas prétendre à une
                        indemnisation.</p>
                    <br>
                    <h3>RESPONSABILITÉ</h3>
                    <p>Le détaillant et l'organisateur sont responsables de la bonne exécution des services prévus au présent contrat et sont
                        tenus d'apporter de l'aide au voyageur en difficulté. En cas de mise en jeu de leur responsabilité de plein droit du fait
                        des prestataires, les limites de dédommagement résultant de conventions internationales selon l'article L. 211-17-IV
                        du Code du Tourisme trouveront à s'appliquer ; à défaut et sauf préjudice corporels, dommages intentionnels ou
                        causés par négligence, les dommages-intérêts éventuels sont limités à trois fois le prix total du voyage ou du séjour.
                        Dans la partie mentions légales, vous trouverez les indications concernant le garant financier de l'agence de voyage
                        ainsi que son assureur de responsabilité civile.</p>
                    <br>
                    <h3>RÉCLAMATION ET MÉDIATION</h3>
                    <p>Le voyageur peut saisir le service client de l'agence de toute réclamation, à l'adresse indiquée dans les informations
                        pratiques par lettre RAR accompagné(e) de tout justificatif. A défaut de réponse satisfaisante dans un délai de 60 jours
                        ou s'il n'est pas satisfait de la réponse reçue, le client peut saisir gratuitement le Médiateur du Tourisme et du Voyage,
                        dont les coordonnées et modalités de saisine sont disponibles sur le site : www.mtv.travel. Si la vente s'effectue en
                        ligne, le voyageur a la possibilité de recourir à la plateforme disponible sur le site
                        <a href="https://webgate.ec.europa.eu/odr">https://webgate.ec.europa.eu/odr</a> pour régler son litige.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-12 medium-12 large-12 columns module-zone" data-position="1" data-block-position="4" data-module-id="1" data-block-module-id="1365364">
                <h2 class="line text-center">
                    <span>
                        <br>
                        Conditions Particulières de Vente </span>
                </h2>

                <div class="row">
                    <div class="small-12 columns">
                        <p>La combinaison de services de voyage qui est propos&eacute;e au client est un forfait au sens de la directive (UE) 2015/2302 et de l&rsquo;article L211-2 II du code du tourisme. Le client b&eacute;n&eacute;ficie donc de tous les droits octroy&eacute;s par l&rsquo;Union europ&eacute;enne applicables aux forfaits, tels que transpos&eacute;s dans le code du tourisme. Directive (UE) 2015/2302 transpos&eacute;e en droit national <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000036242695/" target="_blank">https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000036242695/</a></p>

                        <p>L&rsquo;inscription &agrave; l&rsquo;un de nos voyages entra&icirc;ne l&rsquo;adh&eacute;sion du client &agrave; nos conditions particuli&egrave;res de vente et l&rsquo;acceptation sans r&eacute;serve de leurs dispositions.</p>

                        <p>Ces conditions annulent et remplacent toutes conditions ant&eacute;rieures et s&rsquo;appliquent uniquement aux forfaits touristiques et services de voyages au sens de l&rsquo;article L. 211-1 et suivants du Code du Tourisme, &agrave; l&rsquo;exclusion des ventes de billets de transport seuls et des prestations &laquo; &agrave; la journ&eacute;e &raquo;. Elles ont &eacute;t&eacute; &eacute;labor&eacute;es notamment en fonction des dispositions du Code du Tourisme fixant les conditions d&rsquo;exercice des activit&eacute;s relatives &agrave; l&rsquo;organisation et &agrave; la vente de voyages ou de s&eacute;jours, ainsi que de la r&egrave;glementation europ&eacute;enne et internationale en mati&egrave;re de transport a&eacute;rien et de protection du consommateur. Ce site ne constitue pas l&rsquo;offre pr&eacute;alable au sens de l&rsquo;article R211.4 du Code du Tourisme et conform&eacute;ment aux dispositions de celui-ci, ONPAROU s&rsquo;engage &agrave; communiquer d&rsquo;&eacute;ventuelles modifications, par &eacute;crit avant la conclusion du contrat, concernant les informations relatives aux conditions de transport et de s&eacute;jour, &agrave; l&rsquo;identit&eacute; du transporteur a&eacute;rien, au prix et aux conditions de paiement, aux conditions d&rsquo;annulation et de modification.</p>

                        <p>Si COMPAROPERATOR lors d&rsquo;inscription fait part au client de l&rsquo;indisponibilit&eacute; de la prestation dans un d&eacute;lai de 7 jours &agrave; compter de l&rsquo;inscription, le contrat sera caduc et l&rsquo;acompte rembours&eacute; au client, &agrave; l&rsquo;exclusion de tout autre montant. Tout client inscrit reconna&icirc;t avoir pris connaissance des pr&eacute;sentes Conditions Particuli&egrave;res de Vente qui lui sont communiqu&eacute;es par l&rsquo;agence avant la signature du contrat de voyages et les accepter pour son compte et les personnes inscrites sur le m&ecirc;me contrat.</p>
                    </div>
                </div>
            </div>
        </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 1 - PRIX</h3>

                        <p>Les prix sont indiqu&eacute;s &agrave; titre indicatif sur le site internet en &euro; et s&rsquo;entendent toutes taxes comprises et par personne. Ils r&eacute;sultent de tarifs contractuels n&eacute;goci&eacute;s avec les partenaires de COMPAROPERATOR. Ils sont communiqu&eacute;s &agrave; titre indicatifs et peuvent faire l&rsquo;objet d&rsquo;une modification sans pr&eacute;avis. Nos prix sont publi&eacute;s de mani&egrave;re forfaitaire sur la base d&rsquo;un ensemble de prestations d&eacute;crites dans les programmes de chaque produit. Le prix d&ucirc; par le Client est le montant TTC indiqu&eacute; dans le Bulletin d&rsquo;Inscription ou le Contrat de Vente.</p>

                        <p>Les prix sont calcul&eacute;s en fonction de nombreux facteurs tels que le co&ucirc;t du carburant, les taxes, le co&ucirc;t du dollar am&eacute;ricain ou autres devises. Ils sont aussi bas&eacute;s sur du transport a&eacute;rien par vols sp&eacute;ciaux ou vols r&eacute;guliers &agrave; tarif sp&eacute;cifique pour COMPAROPERATOR. Aussi les tarifs communiqu&eacute;s &agrave; la date de publication peuvent avoir recours &agrave; une modification sans pr&eacute;avis par le voyagiste et des suppl&eacute;ments sont &agrave; pr&eacute;voir en cas de transport a&eacute;rien sur d&rsquo;autres compagnies que celles s&eacute;lectionn&eacute;es sur le site. COMPAROPERATOR en informera dans ce cas le Client au plus tard lors de la r&eacute;servation.</p>

                        <p>Ce prix est accept&eacute; par le Client d&egrave;s lors qu&rsquo;il confirme sa r&eacute;servation et qu&rsquo;il signe son Bulletin d&rsquo;Inscription ou Contrat de Vente.</p>

                        <p>Ainsi, aucune contestation concernant ce prix ne pourra &ecirc;tre prise en consid&eacute;ration apr&egrave;s la signature du Bulletin d&rsquo;Inscription ou Contrat de Vente, ou au retour du voyage. Il appartient au client d&rsquo;appr&eacute;cier avant son d&eacute;part si le prix lui convient en acceptant le principe qu&rsquo;il s&rsquo;agit d&rsquo;un prix forfaitaire n&eacute;goci&eacute; et ne tenant pas compte des promotions consenties par certains prestataires &agrave; certaines dates.</p>

                        <p>Aussi il est possible que pour un m&ecirc;me voyage, les clients aient r&eacute;gl&eacute; des prix diff&eacute;rents. Les clients ayant pay&eacute; le prix le plus &eacute;lev&eacute; ne pourront en aucun cas b&eacute;n&eacute;ficier d&rsquo;un remboursement repr&eacute;sentant la diff&eacute;rence entre le prix qu&rsquo;ils ont pay&eacute; et le prix promotionnel. Les r&eacute;ductions ne sont en aucun cas cumulables avec les promotions.</p>

                        <p><b>Prix d&eacute;risoire</b></p>

                        <p>Si &agrave; la suite d&rsquo;une erreur technique, le prix publi&eacute; par COMPAROPERATOR est manifestement d&eacute;risoire ou abusivement bas, par rapport &agrave; la valeur objective de la prestation, COMPAROPERATOR peut annuler le dossier de r&eacute;servation sans frais ni p&eacute;nalit&eacute;s.</p>

                        <p>Le Client pourra effectuer une nouvelle r&eacute;servation en fonction des disponibilit&eacute;s et selon le prix conforme des prestations.</p>
                    </div>
                </div>

   
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 2 &ndash; MODALIT&Eacute;S DE R&Egrave;GLEMENT</h3>

                        <p>L&rsquo;inscription &agrave; l&rsquo;un de ces voyages implique l&rsquo;acceptation des conditions particuli&egrave;res figurant sur le site. Elle est accompagn&eacute;e d&rsquo;un acompte de 50 %. Le solde est payable, au plus tard 30 jours avant le d&eacute;part, faute de quoi COMPAROPERATOR sera en droit de r&eacute;silier le contrat sans que l&rsquo;acheteur puisse pr&eacute;tendre au remboursement de son acompte ni &agrave; une quelconque indemnit&eacute;. Dans ce cas, il est consid&eacute;r&eacute; comme ayant annul&eacute; son voyage entra&icirc;nant l&rsquo;application des frais d&rsquo;annulation transmis &agrave; l&rsquo;agence, conform&eacute;ment aux pr&eacute;sentes conditions d&rsquo;annulation de l&rsquo;ARTICLE 4.</p>

                        <p>Attention :<br />
                            Le paiement int&eacute;gral est exigible &agrave; l&rsquo;inscription<br />
                            - Lorsque l&rsquo;inscription a lieu &agrave; moins de 31 jours du d&eacute;part,<br />
                            - Pour les prestations de voyage sur mesure, escapade (package dynamique comprenant un vol low-cost ou vol r&eacute;gulier &agrave; prix promotionnel et/ ou une prestation terrestre n&eacute;cessitant un r&egrave;glement imm&eacute;diat )<br />
                            - Pour l&rsquo;achat de vols secs sur des compagnies r&eacute;guli&egrave;res exigeant une &eacute;mission imm&eacute;diate.<br />
                            - Ch&egrave;ques Vacances : Les paiements par Ch&egrave;ques Vacances ou bon cadeau ne pourront faire l&rsquo;objet d&rsquo;un remboursement. En cas d&rsquo;annulation du voyage et si un remboursement doit &ecirc;tre effectu&eacute;, le Client b&eacute;n&eacute;ficiera d&rsquo;un avoir, valable un an, correspondant aux sommes r&eacute;gl&eacute;es par ce moyen de paiement.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 3 - R&Eacute;VISION DE PRIX</h3>

                        <p>En application de l&rsquo;article L 211-12, R 211-8 &amp; R211- 9, COMPAROPERATOR se r&eacute;serve le droit d&rsquo;augmenter le prix convenu du voyage - jusqu&rsquo;&agrave; 20 jours avant la date de d&eacute;part - pour tenir compte des variations suivantes :</p>

                        <p>&bull; du co&ucirc;t du transport : li&eacute; notamment au co&ucirc;t du carburant (base de calcul de nos prix : 450 USD la tonne de p&eacute;trole brut), des assurances a&eacute;riennes et du montant des taxes et des redevances aff&eacute;rentes aux prestations offertes telles que les diverses taxes a&eacute;roports.<br />
                            &bull; du taux de change du dollar am&eacute;ricain, devise applicable &agrave; certains voyages. Le taux de r&eacute;f&eacute;rence appliqu&eacute; &eacute;tant 1 EUR = 1.15 USD<br />
                            &bull; du taux de change du dollar canadien, devise applicable &agrave; certains voyages. Le taux de r&eacute;f&eacute;rence appliqu&eacute; &eacute;tant 1 EUR = 1.53 CAD<br />
                            &bull; du taux de change du Rand Sud-Africain, devise applicable &agrave; certains voyages. Le taux de r&eacute;f&eacute;rence appliqu&eacute; &eacute;tant 1 EUR = 19 ZAR<br />
                            &bull; du taux de change du Livre Sterling devise applicable &agrave; certains voyages. Le taux de r&eacute;f&eacute;rence appliqu&eacute; &eacute;tant 1 EUR = 0,88 GBP</p>

                        <p>Dans le cas d&rsquo;une variation du prix apr&egrave;s la r&eacute;servation, les clients d&eacute;j&agrave; inscrits seront inform&eacute;s par tout moyen permettant d&rsquo;en obtenir un accus&eacute; de r&eacute;ception. Ce compl&eacute;ment de prix peut &ecirc;tre r&eacute;clam&eacute; jusqu&rsquo;&agrave; 20 jours avant le d&eacute;part. En tout &eacute;tat de cause, si l&rsquo;augmentation du prix du voyage d&eacute;passe 8%, le client est en droit soit d&rsquo;accepter la modification, soit d&rsquo;annuler son voyage sans payer de frais d&rsquo;annulation et en informer COMPAROPERATOR dans un d&eacute;lai maximum de 20 jours.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 4 - MODIFICATION OU ANNULATION DU FAIT DU CLIENT</h3>

                        <p>Toute demande d&rsquo;annulation et de modification &eacute;manant du client devra &ecirc;tre adress&eacute;e &agrave; l&rsquo;agence et devra faire l&rsquo;objet d&rsquo;un accus&eacute; de r&eacute;ception. La date de r&eacute;ception de cette demande sera celle retenue pour le calcul des frais vis&eacute;s ci-dessous.</p>

                        <p>Le client ne peut modifier le d&eacute;roulement de son voyage. En cas, de modification (nuits suppl&eacute;mentaires, transferts, billet etc..) le client prendra &agrave; sa charge la diff&eacute;rence de prix et sera redevable du paiement de frais de modification dont le montant lui sera communiqu&eacute; avant la confirmation de sa r&eacute;servation modifi&eacute;e, sans qu&rsquo;il puisse pr&eacute;tendre obtenir le remboursement des prestations dont il n&rsquo;aurait pas b&eacute;n&eacute;fici&eacute; du fait de ces modifications. Toute demande de modification &eacute;manant du client peut &ecirc;tre consid&eacute;r&eacute;e comme une annulation suivie d&rsquo;une nouvelle r&eacute;servation. Les frais d&rsquo;annulation lui sont donc retenus. Aucune demande de modification n&rsquo;est possible - quelle que soit la date de la demande- en cas d&rsquo;&eacute;mission anticip&eacute;e du billet d&rsquo;avion &agrave; la demande du client.</p>

                        <p>Suppl&eacute;ment single : Dans le cas o&ugrave; il ne resterait qu&rsquo;un voyageur dans un h&eacute;bergement, &agrave; la suite de l&rsquo;annulation d&rsquo;un ou plusieurs participants partageant initialement le m&ecirc;me logement, COMPAROPERATOR sera dans l&rsquo;obligation de facturer au Client restant un suppl&eacute;ment chambre individuelle (single).</p>

                        <p>En cas d&rsquo;annulation, la prime d&rsquo;assurance et les frais 192 Conditions particuli&egrave;res de vente 193 de visas et de dossier ne sont pas remboursables. Toute annulation ou modification &eacute;manant du client, entraine la perception des frais suivants :</p>

                        <p>1 - Pour l&rsquo;ensemble des s&eacute;jours et circuits (sauf exceptions mentionn&eacute;es ci-apr&egrave;s).</p>

                        <p>&nbsp;</p>

                        <table>
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Modification / Annulation</td>
                                </tr>
                                <tr>
                                    <td>&Agrave; plus de 30 jours</td>
                                    <td>50 % du prix global</td>
                                </tr>
                                <tr>
                                    <td>De 29 au jour de d&eacute;part</td>
                                    <td>100% de frais</td>
                                </tr>
                            </tbody>
                        </table>

                        <p>2 - pour les vols secs, h&ocirc;tels sec ou package dynamique vol + h&ocirc;tel 100% du montant de la r&eacute;servation pour toute modification ou annulation, sous r&eacute;serve de conditions plus favorables appliqu&eacute;es par le/les prestataire(s) concern&eacute;(s).</p>

                        <p>3 - Croisi&egrave;res (Russie, Portugal, Bahamas) et les circuits Islande :</p>

                        <p>&nbsp;</p>

                        <table>
                            <tbody>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Modification / Annulation</td>
                                </tr>
                                <tr>
                                    <td>A plus de 101 jours avant le d&eacute;part</td>
                                    <td>350 euros de frais par personne + le montant du billet d&rsquo;avion si &eacute;mis</td>
                                </tr>
                                <tr>
                                    <td>A partir de 100 jours</td>
                                    <td>100% de frais</td>
                                </tr>
                            </tbody>
                        </table>

                        <p>COMPAROPERATOR conseille de souscrire une assurance sp&eacute;cifique couvrant ces frais, selon les limites du contrat d&rsquo;assurance - annulation dont les conditions seront remises au client par l&rsquo;agence avant la conclusion du contrat de voyage.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 5 &ndash; MODIFICATION OU ANNULATION DU FAIT DE L&rsquo;ORGANISATEUR</h3>

                        <p>COMPAROPERATOR se r&eacute;serve le droit de modifier unilat&eacute;ralement avant le d&eacute;but du voyage des prestations sous r&eacute;serve que ladite modification soit mineure.</p>

                        <p>Lorsqu&rsquo;avant le d&eacute;part, du fait d&rsquo;un &eacute;v&egrave;nement ext&eacute;rieur qui s&rsquo;impose &agrave; COMPAROPERATOR, celui-ci est amen&eacute; &agrave; modifier un des &eacute;l&eacute;ments essentiels du contrat, le client est inform&eacute; de cette modification le plus rapidement possible par tout moyen permettant d&rsquo;obtenir un accus&eacute; de r&eacute;ception. Le client pourra alors soit r&eacute;silier le contrat, soit accepter la modification propos&eacute;e par ONPAROU si il y en a une.</p>

                        <p>Le client ne pourra pr&eacute;tendre &agrave; aucune indemnit&eacute; si l&rsquo;annulation du voyage est impos&eacute;e par des circonstances de force majeure, des circonstances exceptionnelles et in&eacute;vitables, des &eacute;v&egrave;nements climatiques ou naturels r&eacute;currents (ph&eacute;nom&egrave;ne m&eacute;t&eacute;o tel que cyclone, algues, m&eacute;duses etc.&hellip;) ou pouvant entra&icirc;ner l&rsquo;impossibilit&eacute; de profiter de certaines prestations pour des raisons tenant &agrave; la s&eacute;curit&eacute; des voyageurs.</p>

                        <p>Aussi lorsqu&rsquo;aux fins d&rsquo;ex&eacute;cution du voyage, un minimum de participants est requis, l&rsquo;insuffisance du nombre de participants est un motif valable d&rsquo;annulation sans indemnit&eacute; due au Client, sous r&eacute;serve que ONPAROU en informe le Client (Le minimum de participants n&eacute;cessaires pourra &ecirc;tre r&eacute;vis&eacute; en fonction de l&rsquo;&eacute;volution de l&rsquo;&eacute;pid&eacute;mie de la crise COVID) :<br />
                            &bull; 20 jours avant la date de d&eacute;part pour les voyages dont la dur&eacute;e d&eacute;passe 6 jours.<br />
                            &bull; 7 jours avant la date de d&eacute;part pour les voyages dont la dur&eacute;e est de 2 &agrave; 6 jours<br />
                            &bull; 48h avant la date de d&eacute;part pour les voyages dont la dur&eacute;e est de 2 jours. Le Client sera alors rembours&eacute; des sommes d&eacute;j&agrave; vers&eacute;es.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 6 - CESSION DE CONTRAT</h3>

                        <p>Conformément à l’article L 211-11 du Code du Tourisme, le Client a la possibilité de céder son contrat tant que celui-ci n’a produit aucun effet et jusqu’à 7 jours du départ, en prévenant l’agence de voyage et ONPAROU dans un délai raisonnable, à une personne remplissant les mêmes conditions que lui. Le Client ne peut pas céder ses contrats d’assurance. La cession entraine des frais qui sont identiques aux frais d’annulation et de modification notés à l’ARTICLE 4. Les billets d’avion, même en cas de perte ou de vol, ne sont ni échangeables, ni remboursables. Le client a l’obligation d’acheter à ses frais un billet d’avion de remplacement.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 7 - TRANSPORT A&Eacute;RIEN</h3>

                        <p>7.1 Responsabilit&eacute; des transporteurs :<br />
                            Les cons&eacute;quences des accidents / incidents pouvant survenir &agrave; l&rsquo;occasion de l&rsquo;ex&eacute;cution du transport a&eacute;rien sont r&eacute;gies par les dispositions de la convention de Montr&eacute;al ou les r&eacute;glementations locales r&eacute;gissant les transports nationaux des pays concern&eacute;s. Les dispositions du R&egrave;glement europ&eacute;en n 261/2004 ne peuvent en aucun cas &ecirc;tre invoqu&eacute;es &agrave; l&rsquo;encontre de l&rsquo;organisateur.</p>

                        <p>ONPAROU ne peut &ecirc;tre tenu responsable du d&eacute;faut d&rsquo;enregistrement des clients au lieu de d&eacute;part du voyage occasionn&eacute;, entre autre, par un retard de pr&eacute;acheminement a&eacute;rien, ferroviaire ou terrestre, non r&eacute;serv&eacute; par son interm&eacute;diaire. ONPAROU ne saurait voir sa responsabilit&eacute; se substituer &agrave; celle des transporteurs fran&ccedil;ais ou &eacute;trangers assurant les transferts ou le transport des passagers.</p>

                        <p>7.2 Vols r&eacute;guliers :<br />
                            &bull; Les organisateurs se r&eacute;servent &eacute;ventuellement le droit de remplacer le transporteur a&eacute;rien indiqu&eacute; sur les plans de transports, de modifier les horaires et/ou de modifier les types d&rsquo;appareil.<br />
                            &bull; Ils peuvent aussi regrouper sur une m&ecirc;me ville de d&eacute;part &agrave; l&rsquo;aller comme au retour, plusieurs autres villes de d&eacute;part et d&rsquo;acheminer les participants par voie terrestre ou par tous itin&eacute;raires vols r&eacute;guliers possibles, vers les lieux de s&eacute;jours, dans le cas o&ugrave; le minimum de participants par ville n&rsquo;est pas atteint, sans donner droit &agrave; un d&eacute;dommagement. Ce minimum varie selon la capacit&eacute; totale de l&rsquo;appareil.<br />
                            &bull; Les contraintes li&eacute;es aux vols charters leurs imposent parfois des prestations payantes, contrairement aux compagnies a&eacute;riennes r&eacute;guli&egrave;res. Pour les d&eacute;parts depuis Paris, il est possible que l&rsquo;a&eacute;roport de d&eacute;part soit diff&eacute;rent de l&rsquo;a&eacute;roport d&rsquo;arriv&eacute;e.<br />
                            &bull; Les horaires de transport sont donn&eacute;s &agrave; titre indicatif, sous r&eacute;serve de modification et ne sont pas de nature contractuelle. Les horaires sont communiqu&eacute;s lors de l&rsquo;envoi de la convocation mais restent susceptibles de modification jusqu&rsquo;au jour du d&eacute;part, les terminaux de d&eacute;part et de retour et les horaires de vol pouvant &ecirc;tre modifi&eacute;s sans pr&eacute;avis par la compagnie.<br />
                            &bull; Les horaires de retour seront communiqu&eacute;s sur place.<br />
                            &bull; Il se peut qu&rsquo;il y ait un peu d&rsquo;attente lors des transferts &agrave; l&rsquo;arriv&eacute;e (notamment &agrave; New York et sur les longs courriers). Le guide, ou le transf&eacute;riste, fait en sorte de regrouper les clients pour le d&eacute;part &agrave; destination de l&rsquo;h&ocirc;tel.</p>

                        <p>7.3 Informations passagers :<br />
                            &bull; Nous vous recommandons fortement de ne pas pr&eacute;voir d&rsquo;engagement important, d&rsquo;obligation professionnelle (le jour du retour ou le lendemain) ou de temps de transit/correspondance trop court, notamment en cas de vols sp&eacute;ciaux, qui peuvent plus facilement &ecirc;tre sujets &agrave; des retards.</p>

                        <p>7.4 Remboursements &ndash; modifications<br />
                            &bull; Les taxes des vols charters ne sont pas remboursables. Aucun remboursement ne peut &ecirc;tre effectu&eacute; si le client ne se pr&eacute;sente pas aux heures indiqu&eacute;es ou s&rsquo;il n&rsquo;est pas en possession des documents de police ou de sant&eacute; exig&eacute;s. Nous ne pouvons pas &ecirc;tre tenus pour responsables en cas de retard ou d&eacute;fection de pr&eacute; acheminements a&eacute;rien, ferroviaire ou terrestre.<br />
                            &bull; Sur les vols r&eacute;guliers, seulement une partie des taxes a&eacute;roports est remboursable.</p>

                        <p>7.5 Identit&eacute; du Transport a&eacute;rien :<br />
                            &bull; Conform&eacute;ment aux articles R.211-15 &agrave; R.211-18 du Code du Tourisme, l&rsquo;information pr&eacute;alable de l&rsquo;identit&eacute; du transporteur a&eacute;rien est communiqu&eacute;e sous la forme d&rsquo;une liste comprenant au maximum, par tron&ccedil;on, trois transporteurs contractuels. L&rsquo;identit&eacute; du transporteur contractuel ou de fait est communiqu&eacute;e par &eacute;crit ou par voie &eacute;lectronique d&egrave;s qu&rsquo;elle est connue et confirm&eacute;e au plus tard 8 jours avant le d&eacute;part.<br />
                            &bull; Cette information pourra &ecirc;tre modifi&eacute;e apr&egrave;s la conclusion du contrat en cas de changement de transporteur, d&egrave;s que la modification est connue, et au plus tard lors de l&rsquo;enregistrement ou avant les op&eacute;rations d&rsquo;embarquement lorsque la correspondance s&rsquo;effectue sans enregistrementpr&eacute;alable.<br />
                            &bull; Le client ne peut, sauf accord pr&eacute;alable de notre part, modifier le d&eacute;roulement de son voyage ou de son s&eacute;jour. Les frais de modification non accept&eacute;s restent enti&egrave;rement &agrave; sa charge sans qu&rsquo;il puisse pr&eacute;tendre obtenir le remboursement des prestations dont il n&rsquo;a pas b&eacute;n&eacute;fici&eacute; du fait de ces modifications.</p>

                        <p>Les vols propos&eacute;s sont des vols r&eacute;guliers ou sp&eacute;ciaux. Les jours et horaires communiqu&eacute;s lors de la r&eacute;servation sont toujours de principe, donc non contractuels et susceptibles &agrave; modification. Ils sont d&eacute;finis en d&eacute;but de saison et peuvent varier. Ils ne sont souvent confirm&eacute;s d&eacute;finitivement que peu de temps avant le d&eacute;part. De plus, un incident technique, de mauvaises conditions climatiques ou d&rsquo;autres &eacute;l&eacute;ments peuvent entra&icirc;ner des retards importants ou m&ecirc;me un changement d&rsquo;a&eacute;roport. Dans tous les cas, les horaires de retour vous seront confirm&eacute;s sur place par les correspondants locaux sous forme d&rsquo;affichage dans le hall de l&rsquo;h&ocirc;tel pour les clients en s&eacute;jour et sur appel de votre part au num&eacute;ro indiqu&eacute; sur le carnet de voyages pour les clients en vols secs ou s&eacute;jour libre.</p>

                        <p>Les logos des compagnies a&eacute;riennes figurant dans les tableaux de prix sont communiqu&eacute;s &agrave; titre indicatif. Tous les horaires de vols communiqu&eacute;s avant r&eacute;ception de la convocation ne peuvent l&rsquo;&ecirc;tre qu&rsquo;&agrave; titre indicatif. Nous ne pourrons &ecirc;tre tenus responsables d&rsquo;un changement d&rsquo;horaires entre votre r&eacute;servation et la convocation d&eacute;finitive.</p>

                        <p>A noter : Aucun repas n&rsquo;est servi &agrave; bord de certains vols, &agrave; l&rsquo;exception de ceux &agrave; destination de certains longs courriers. Une restauration payante de type snack, est propos&eacute;e &agrave; bord des vols sur les autres destinations.</p>

                        <p>7.6 - Les Pr&eacute; et Post acheminements peuvent se faire en avion ou en train :<br />
                            &bull; En raison des horaires de la compagnie et selon les villes de province, il faudra &eacute;ventuellement pr&eacute;voir une nuit &agrave; Paris la veille du d&eacute;part (et/ou au retour) &agrave; la charge du client.<br />
                            &bull; Nous ne garantissons pas toujours de vols directs.<br />
                            &bull; Il se peut qu&rsquo;il y ait un peu d&rsquo;attente lors des transferts &agrave; l&rsquo;arriv&eacute;e (notamment &agrave; New York).<br />
                            &bull; Pour les d&eacute;parts depuis Paris, il est possible que l&rsquo;a&eacute;roport de d&eacute;part soit diff&eacute;rent de l&rsquo;a&eacute;roport d&rsquo;arriv&eacute;e.<br />
                            &bull; En cas de non pr&eacute;sentation sur le vol &laquo; aller &raquo; d&rsquo;un vol charter, il est imp&eacute;ratif de reconfirmer le vol retour aupr&egrave;s de la compagnie a&eacute;rienne.<br />
                            &bull; En cas de non pr&eacute;sentation sur le vol &laquo; aller &raquo; d&rsquo;un vol r&eacute;gulier, le vol retour n&rsquo;est en aucun cas garanti. La compagnie est en droit d&rsquo;annuler le retour.</p>

                        <p>ONPAROU conseille de mani&egrave;re g&eacute;n&eacute;rale de pr&eacute;voir un temps de connexion minimum de trois heures et recommande &agrave; ses clients devant effectuer un pr&eacute; ou un post-acheminement, de r&eacute;server des titres de transport modifiables, voire remboursables, afin d&rsquo;&eacute;viter le risque &eacute;ventuel de leur perte financi&egrave;re.</p>

                        <p>7.8 - Bagages COMPAROPERATOR conseille de ne placer ni bijoux, ni objets de valeur (papiers, t&eacute;l&eacute;phones portables, appareils photos etc.) ni m&eacute;dicaments dans les bagages en soute et de les conserver avec soi en bagages &agrave; main (avec ordonnance pour les m&eacute;dicaments). Les frais impos&eacute;s par le transporteur pour suppl&eacute;ment de bagages ou exc&eacute;dent de poids sont &agrave; la charge du client. Toute perte, endommagement, ou vol du ou des bagages doit &ecirc;tre d&eacute;clar&eacute; aupr&egrave;s de la compagnie a&eacute;rienne directement &agrave; l&rsquo;a&eacute;roport. ONPAROU d&eacute;cline toute responsabilit&eacute; en cas de perte, vol ou d&eacute;t&eacute;rioration d&rsquo;un bagage et n&rsquo;intervient pas sur le litige bagage.</p>

                        <p>7.9 - Contentieux La plupart des compagnies a&eacute;riennes en cas de contentieux demandent au client d&rsquo;ouvrir leur dossier directement aupr&egrave;s de leur service. ONPAROU ne pourra donc se substituer au client.</p>

                        <p>7.10 - Vols de rapatriement Dans le cas o&ugrave; le retour du Client s&rsquo;effectuerait sur un vol de rapatriement en raison d&rsquo;une circonstance exceptionnelle et in&eacute;vitable, il est possible que la ville d&rsquo;arriv&eacute;e soit diff&eacute;rente de celle pr&eacute;vue au contrat (les vols de rapatriement sont g&eacute;n&eacute;ralement mis en place &agrave; destination de Paris). Les co&ucirc;ts suppl&eacute;mentaires qu&rsquo;engendraient le retour du Client jusqu&rsquo;&agrave; son domicile demeureront &agrave; sa charge.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 8 – DURÉE DU VOYAGE</h3>

                        <p>Les dates sont seules requises ici et non les heures de départ/arrivée. La durée du voyage est établie à compter de la date du jour de la convocation à l’aéroport de départ à la date du jour de retour. Les programmes et prix sont calculés en nombre de nuitées et non de journées. En raison des horaires du transport imposés par les compagnies aériennes, la première et/ou dernière nuitée peuvent être écourtées par rapport au programme ou circuit prévu.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 9 - H&Ocirc;TEL</h3>

                        <p>En cas de surr&eacute;servation h&ocirc;teli&egrave;re, les clients ne peuvent pr&eacute;tendre &agrave; aucune indemnisation s&rsquo;ils sont log&eacute;s dans un h&ocirc;tel de cat&eacute;gorie &eacute;quivalente ou sup&eacute;rieure.</p>

                        <p>9.1 Classification : La classification des h&ocirc;tels par &eacute;toile ou par cat&eacute;gorie est effectu&eacute;e par les minist&egrave;res de Tourisme des pays &agrave; destination. Ces normes sont diff&eacute;rentes des normes fran&ccedil;aises. Pendant votre circuit les h&ocirc;tels donn&eacute;s peuvent &ecirc;tre modifi&eacute;s par nos prestataires en respectant toujours la m&ecirc;me cat&eacute;gorie et la situation.</p>

                        <p>9.2 Arriv&eacute;e / D&eacute;part : Dans la plupart des h&ocirc;tels, l&rsquo;enregistrement &agrave; l&rsquo;arriv&eacute;e se fait &agrave; partir de 14h et au d&eacute;part &agrave; 10h. Des chambres de substitution en cas de retard de vol peuvent &ecirc;tre mises &agrave; disposition des clients selon la disponibilit&eacute; de l&rsquo;h&ocirc;telier et souvent en suppl&eacute;ment.</p>

                        <p>Selon la r&eacute;glementation internationale, le jour du d&eacute;part les chambres doivent &ecirc;tre lib&eacute;r&eacute;es avant midi, m&ecirc;me si le d&eacute;part n&rsquo;a lieu qu&rsquo;en soir&eacute;e.</p>

                        <p>9.3 Chambres : Nous ne garantissons jamais la situation exacte de la chambre lors de l&rsquo;achat du voyage. Une vue Mer peut &ecirc;tre frontale, partielle ou lat&eacute;rale m&ecirc;me avec un suppl&eacute;ment. De m&ecirc;me nous ne pouvons garantir l&rsquo;&eacute;tage et la situation exacte de ces chambres. Dans chaque h&ocirc;tel se trouvent des chambres moins bien plac&eacute;es, vendues au m&ecirc;me prix que les autres.</p>

                        <p>De la m&ecirc;me mani&egrave;re, nous ne pouvons pas vous garantir la configuration des chambres et de ses couchages.</p>

                        <p>Le nombre de cha&icirc;ne TV en langue fran&ccedil;aise disponible peut &ecirc;tre limit&eacute; ou inexistant. Les chaines fran&ccedil;aises peuvent parfois &ecirc;tre payantes. Le minibar dans la chambre peut &ecirc;tre rempli ou vide. En g&eacute;n&eacute;ral, les consommations sont payantes.</p>

                        <p>LA CHAMBRE &laquo; INDIVIDUELLE &raquo; : Elle fait souvent l&rsquo;objet d&rsquo;un suppl&eacute;ment. Elle est toujours en nombre limit&eacute; et souvent plus petite et moins bien situ&eacute;e.</p>

                        <p>LA CHAMBRE &laquo; DOUBLE &raquo; : Elle dispose soit de 2 lits jumeaux ou d&rsquo;1 grand lit (non garanti) selon les h&ocirc;tels et les destinations.</p>

                        <p>LA CHAMBRE &laquo; TRIPLE &raquo; : C&rsquo;est souvent une chambre double avec adjonction d&rsquo;un lit suppl&eacute;mentaire ou d&rsquo;appoint ce qui peut pr&eacute;senter toutefois des inconv&eacute;nients d&rsquo;utilisation tels qu&rsquo;espace r&eacute;duit ou lit pliant.</p>

                        <p>LA CHAMBRE &laquo; QUADRUPLE &raquo; : Elle est compos&eacute;e d&rsquo;une seule chambre dont la capacit&eacute; maximum est de 4 pers. (avec adjonction de lits suppl&eacute;mentaires, d&rsquo;appoint ou superpos&eacute;s).</p>

                        <p>&nbsp;</p>

                        <p>9.4 Installations : Il se peut, notamment en fonction du remplissage de l&rsquo;h&ocirc;tel, de la saisonnalit&eacute; et du climat que le nombre de parasols, transats, mat&eacute;riel sportif, etc&hellip; soit insuffisant. Les horaires d&rsquo;ouverture des bars, restaurants, discoth&egrave;ques ou toutes autres infrastructures peuvent &ecirc;tre irr&eacute;guliers et d&eacute;pendent de la direction de l&rsquo;h&ocirc;tel. En avant ou arri&egrave;re-saison, certaines activit&eacute;s peuvent ne pas &ecirc;tre en place, une partie des installations (plage, restaurants, piscine, navette plage&hellip;) peut &ecirc;tre ferm&eacute;e ou non am&eacute;nag&eacute;e.</p>

                        <p>9.5 Taxes de s&eacute;jour : Selon les destinations et les communes, une taxe de s&eacute;jour peut &ecirc;tre &agrave; r&eacute;gler par les clients directement sur place. Les montants de cette taxe sont modifiables sans pr&eacute;avis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 10 - CIRCUITS ET EXCURSIONS</h3>

                        <p>10-1 Les programmes des circuits sont des programmes types. Ils correspondent &agrave; un nombre de nuit d&eacute;fini et pas obligatoirement &agrave; un nombre de journ&eacute;es enti&egrave;res. En fonction des horaires la premi&egrave;re et la derni&egrave;re journ&eacute;e peuvent &ecirc;tre &eacute;court&eacute;es par une arriv&eacute;e tardive ou un d&eacute;part matinal. Aucun remboursement ne pourra avoir lieu dans ce cas. L&rsquo;ordre des visites peut &ecirc;tre modifi&eacute; sur place. De m&ecirc;me, les tour-op&eacute;rateurs se r&eacute;servent le droit de modifier les itin&eacute;raires dans les cas o&ugrave; des mus&eacute;es sont ferm&eacute;s, en travaux ou pour toute raison interdisant l&rsquo;acc&egrave;s aux sites ou mus&eacute;es. Dans tous les cas, nos correspondants s&rsquo;efforceront de trouver une alternative satisfaisante. En p&eacute;riode charg&eacute;e, pour des raisons de disponibilit&eacute;s h&ocirc;teli&egrave;res limit&eacute;es &agrave; certaines &eacute;tapes, le logement peut exceptionnellement s&rsquo;effectuer dans une ville &agrave; proximit&eacute; et non dans celle indiqu&eacute;e, ceci afin de vous assurer un meilleur confort.</p>

                        <p>10-2 Pour tous les circuits, les prix sont &eacute;tablis sur la base d&rsquo;un minimum de participants, sauf mention sp&eacute;ciale. Jusqu&rsquo;&agrave; 20 jours pr&eacute;c&eacute;dant le d&eacute;part ONPAROU se r&eacute;serve la facult&eacute; d&rsquo;annuler le contrat sans indemnit&eacute;, en cas de nombres de participants inscrits inf&eacute;rieur &agrave; ce minimum.</p>

                        <p>En cas d&rsquo;insuffisance de participants, le tour-op&eacute;rateur peut &ecirc;tre amen&eacute; &agrave; effectuer un regroupement de participants avec un autre organisateur de voyages ou apporter des modifications dans le respect de l&rsquo;article R.211-11 du code du tourisme avec un d&eacute;calage possible de 24 ou 48 heures par rapport &agrave; la date de d&eacute;part ou de retour pr&eacute;vue.</p>

                        <p>Dans le cas de voyages avec un maximum de participants, ce nombre peut varier de plus ou moins 10 %, sans que cela ne donne droit &agrave; un d&eacute;dommagement.</p>

                        <p>Les &eacute;tapes peuvent &ecirc;tre parfois longues en raison des grandes distances entre les principales villes et les principales attractions touristiques. Les kilom&eacute;trages sont donn&eacute;s &agrave; titre indicatif et peuvent varier en fonction d&rsquo;imp&eacute;ratifs locaux notamment s&rsquo;agissant de la r&eacute;glementation de la dur&eacute;e de service des chauffeurs.</p>

                        <p>Lors d&rsquo;un circuit combinant les USA et le Canada le client devra s&rsquo;affranchir d&rsquo;une taxe d&rsquo;entr&eacute;e sur le territoire am&eacute;ricain d&rsquo;un montant de 6 USD. Elle est &agrave; r&eacute;gler en esp&egrave;ce sur place.</p>

                        <p>10-3. Il est possible que les groupes soient compos&eacute;s de mini groupes francophones d&eacute;j&agrave; constitu&eacute;s et partag&eacute;s par plusieurs Tours Op&eacute;rateurs.</p>

                        <p>A l&rsquo;arriv&eacute;e, sur 90% des circuits, le guide proposera une liste d&rsquo;excursions optionnelles. Il est conseill&eacute; au Client d&rsquo;en tenir compte lors de son achat de voyage (ces excursions ne sont en aucun cas obligatoires). Les excursions sont souvent &agrave; r&eacute;gler en monnaie locale.</p>

                        <p>Les excursions, bien que recommand&eacute;es par ONPAROU, font l&rsquo;objet d&rsquo;une tractation directe avec le prestataire sur place et ne rentrent pas dans le cadre du forfait achet&eacute;. De ce fait, toute contestation doit &ecirc;tre faite sur place aupr&egrave;s de ce dernier afin que les &eacute;ventuels litiges, qui ne concernent que les deux parties engag&eacute;es, puissent &ecirc;tre r&eacute;gl&eacute;s.</p>

                        <p>Guide : II est d&rsquo;usage de donner un pourboire en fin de circuit. Celui-ci n&rsquo;est jamais obligatoire mais n&rsquo;est pas non plus facultatif. (5USD/CAD / jour pour le chauffeur et le Guide) plus les guides locaux (pr&eacute;voir le m&ecirc;me montant).</p>

                        <p>Dans certaines villes et certains sites (type mus&eacute;es), un guide additionnel est pr&eacute;vu ; Lors des circuits, il y a la possibilit&eacute; de voir et d&rsquo;acheter des objets artisanaux. ONPAROU d&eacute;cline toute responsabilit&eacute; sur les achats ; les conseils des guides &eacute;tant donn&eacute;s &agrave; titre gratuit et indicatif.</p>

                        <p>Les conseils donn&eacute;s par le minist&egrave;re des Affaires &eacute;trang&egrave;res peuvent amener le tour-op&eacute;rateur &agrave; la modification significative du circuit ou l&rsquo;annulation de celui-ci pour des raisons de s&eacute;curit&eacute;. Dans ce cas, le tour-op&eacute;rateur proposera l&rsquo;alternative la plus adapt&eacute;e soit sur une autre destination, soit en proc&eacute;dant au remboursement du circuit. En aucun cas le client pourra pr&eacute;tendre &agrave; des dommages et int&eacute;r&ecirc;ts.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 11 – REPAS</h3>

                        <p>Les repas inclus dans les prix sont ceux mentionnés dans les programmes. Selon la destination et en fonction des horaires de vols, le premier et le dernier repas peuvent ne pas être servis à l’hôtel mais remplacés par ceux servis à bord de l’avion. Les repas sont la plupart du temps présentés sous forme de buffet et sont composés différemment selon la catégorie de l’hôtel. Toutes les prestations qui ne sont pas précisées dans le descriptif ne sont pas incluses dans la formule réservée. Sauf mention contraire, la pension commence au moment du check in et se termine au moment du check out.</p>

                        <p>La qualité des plats proposés n’est pas comparable à la restauration française. Les petits déjeuners, dans certains hôtels, peuvent être sommaires. Les boissons incluses dans la formule sont uniquement des boissons locales. Exemple : vin de table local.</p>

                        <p>Toutes les boissons importées sont payantes sauf mention dans le descriptif du produit. Les boissons (Alcool, soft drink…) sont généralement servies dans des verres en plastiques. Même dans la formule «tout compris» :<br>
                            • L’eau en bouteille n’est pas garantie, elle peut être proposée en fontaine ou au verre. Les bouteilles d’eau ne peuvent être remplies à ces fontaines.<br>
                            • Et généralement l’eau en bouteille est en supplément. Dans la plupart des pays, les hôteliers ne fournissent pas d’eau en carafe</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 12 – ASSURANCE</h3>

                        <p>Aucune assurance n‘est comprise dans le contrat de voyage. COMPAROPERATOR recommande très fortement de souscrire une assurance auprès de l’agent de voyages. Pour toute souscription d’une assurance auprès de COMPAROPERATOR, les assurances multirisques ou annulation sont considérées comme “consommées” dès qu’elles sont vendues, elles sont donc non remboursables.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 13 – PERSONNES A MOBILITÉ RÉDUITE</h3>

                        <p>D’une manière générale, les séjours et circuits ne sont pas adaptés aux personnes à mobilité réduite. Il est conseillé aux personnes à mobilité réduite de s’informer sur l’accessibilité du ou des sites, qui sont pour la plupart difficile d’accès. Pour les personnes voyageant en fauteuil roulant, il est obligatoire de transmettre à COMPAROPERATOR toutes informations telles que : typologie, dimensions, poids,… au moment de la réservation et ce dans les meilleurs délais, afin d’en informer les compagnies aériennes.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 14 – FORMALITÉS</h3>

                        <p>Les ressortissants français doivent être munis d’un passeport ou d’une carte d’identité en cours de validité pour tout voyage à destination de pays membres de l’Union Européenne. Pour tous les autres pays, ils doivent posséder un passeport, valable jusqu’à 6 mois après la date de retour. Sur certaines destinations un visa est obligatoire. Les non-ressortissants français ou les bi-nationaux sont invités à consulter le consulat ou l’ambassade des pays de destination.</p>

                        <p>COMPAROPERATOR conseille au client de consulter jusqu’au jour du départ les sites : <a href="https://www.pasteur.fr/fr" target="_blank">https://www.pasteur.fr/fr</a>, <a href="https://www.diplomatie.gouv.fr/fr/conseils-aux-voyageurs/" target="_blank">https://www.diplomatie.gouv.fr/fr/conseils-aux-voyageurs/</a></p>

                        <p>Et conseille aux voyageurs de s’inscrire sur le site Ariane : <a href="https://pastel.diplomatie.gouv.fr/fildariane/dyn/public/login.html" target="_blank">https://pastel.diplomatie.gouv.fr/fildariane/dyn/public/login.html</a></p>

                        <p>Il appartient au client de respecter scrupuleusement ces formalités en supportant les frais et de s’assurer que les noms et prénoms qui figurent sur leurs documents de voyage correspondent exactement à ceux qui figurent sur leur pièce d’identité, passeport au visa.</p>

                        <p>COMPAROPERATOR ne saurait être tenu responsable si le client présente des documents d’identités et/ ou sanitaires périmés ou lorsqu’il ne les présente pas. COMPAROPERATOR décline toute responsabilité qu’entrainerait la non-conformité du voyageur envers les formalités recommandées à l’inscription. Pour les USA et circuit avec vols via les USA: Demande ESTA (Electronic System for Traveler Authorization) : « Visa Waiver Program » à faire par le voyageur. Pour le Canada, en vertu du programme d’AVE (Autorisation de Voyage Electronique), des citoyens de pays autres que les États-Unis qui n’ont pas besoin de visa pour entrer au Canada devront obtenir une autorisation en ligne avant de venir au Canada en avion, sauf s’ils en sont dispensés.</p>

                        <p>Mineurs :<br>
                            COMPAROPERATOR recommande vivement de munir le mineur non-accompagné par ses représentants légaux d’une copie de son livret de famille. Dans le cadre d’un voyage à l’étranger, le mineur résidant en France et voyageant sans être accompagné par ses représentants légaux, doit être muni en plus de sa pièce d’identité et du formulaire d’autorisation de sortie de territoire : CERFA N°15646*01 à télécharger : <a href="https://www.formulaires.service-public.fr/gf/cerfa_15646.do" target="_blank">https://www.formulaires.service-public.fr/gf/cerfa_15646.do</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 15 - RESPONSABILITÉ</h3>

                        <p>Lorsque que la responsabilité de COMPAROPERATOR est engagée, elle est limitée au coût de la prestation non assurée par sa faute. L’organisateur est dégagée de toute responsabilité lorsque l’annulation ou la modification essentielle d’un voyage – avant le départ ou à destination – est imputable à un cas de force majeure, à des mesures liées à la sécurité des voyageurs, à la faute du client ou au fait d’un tiers étranger à la fourniture des prestations.</p>

                        <p>Dans tous les cas, les prestations que le client n’a pas acquises directement auprès de l’organisateur lors de la réservation de son voyage à forfait ne sauraient engager la responsabilité du voyagiste. Les pré et post-acheminements pris à la seule initiative du client relèvent en tout état de cause de sa responsabilité exclusive. En cas de mise en jeu de la responsabilité de plein droit de COMPAROPERATOR du fait de ses prestataires, les limites de dédommagement résultant de conventions internationales selon l’article L. 211-17-IV du Code du Tourisme trouveront à s’appliquer ; à défaut et sauf préjudice corporel, dommages intentionnels ou causés par négligence, les dommages-intérêts éventuels sont limités à trois fois le prix total du voyage.</p>

                        <p><b>Vols et pertes effets personnels (Article 15)</b><br>
                            Les effets personnels du Client restent sous sa responsabilité tout au long de son voyage. COMPAROPERATOR ne peut pas être tenu responsable des vols éventuels. Il appartient au Client d’entreprendre les démarches sur place quant à, notamment, la déclaration de vol ou de perte auprès des autorités compétentes locales et de faire sa déclaration auprès de son assurance personnelle. Le bagage du Client doit rester sous sa surveillance lors des transferts ou changement de véhicule. Le Client doit donc s’assurer que son bagage a bien été chargé lors des changements d’hôtels.</p>

                        <p>Responsabilité civile professionnelle :<br>
                            Notre organisation est obligatoirement couverte par une assurance de responsabilité civile auprès de : Hiscox HA RCP0238629.</p>

                        <p>Notre agence titulaire du certificat d’immatriculation : IM 033 11 0002 est membre du syndicat national des agences de voyages.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 16 - DONNÉES A CARACTÈRE PERSONNEL</h3>

                        <p>Les données personnelles recueillies par COMPAROPERATOR sont utilisées pour la gestion des commandes des clients.</p>

                        <p>Les donnés sont conservées pendant une durée qui n’excède pas la durée nécessaire des finalités suivantes :<br>
                            - Commande d’un séjour : les données nécessaires au traitement de la commande du client seront conservées pendant la durée nécessaire à l’établissement d’un droit ou d’un contrat<br>
                            - Gestion de la relation commerciale : les donnés seront conservées (au plus tard) 5 ans à compter de la fin de la relation commerciale.<br>
                            Conformément à la législation en vigueur, le client dispose d’un droit d’accès, de rectification, de suppression et de portabilité des données personnelles le concernant et d’un droit d’opposition pour raison légitime à son traitement.</p>

                        <p>Pour exercer ces droits, le client doit adresser un courrier postal à l’adresse suivante : COMPAROPERATOR 11 Allée James Watt 33700 MERIGNAC ou par email : à <a href="mailto:contact@COMPAROPERATOR.com">contact@COMPAROPERATOR.com</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 17 – RÉCLAMATION</h3>

                        <p>Si le client considère qu’une prestation sur place n’est pas fournie comme prévue, il doit immédiatement et expressément formuler sa réclamation aux responsables locaux, afin de ne pas en subir les inconvénients pendant toute la durée du voyage. Le défaut de signalement d’une non-conformité SUR PLACE aura une influence sur le traitement de la réclamation client.</p>

                        <p>Les réclamations sur le déroulement du voyage doivent être adressées à l’organisateur par écrit, par l’intermédiaire du détaillant, avec les documents justificatifs, dans le mois qui suit le retour du client. L’étude du dossier portera uniquement sur les éléments contractuels de la réservation. Aucune appréciation d’ordre subjective ne sera prise en compte.</p>

                        <p>Après avoir saisi le service client et à défaut de réponse satisfaisante dans un délai de 60 jours, le client peut saisir le médiateur du tourisme et du voyage, dont les coordonnées et modalités de saisine sont disponibles sur le site : www.mtv.travel. Pour les réservations effectuées dans une agence de voyages, le Client devra lui adresser directement sa réclamation.</p>

                        <p>Les réclamations sont à adresser à :<br>
                            COMPAROPERATOR.COM<br>
                            3 Rue de la Liberté<br>
                            75 003 PARIS</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <h3>ARTICLE 18 - ERRATUM SITE INTERNET</h3>

                        <p>Seule la fiche produit du partenaire tour-opérateur envoyée au moment de la réservation du voyage fait titre de document contractuel.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <hr />
                        <p>COMPAROPERATOR.com<br />
                            3 Rue de la Liberté <br />
                            75 003 PARIS<br />
                            Licence IM 000 00 0000<br />
                            RCP Hiscox HA RCP012345<br />
                            RCS Paris 0000000000<br />
                            <br />
                        </p>
                    </div>
                </div>
    </div>


    <div class="page-footer">


                    <div class="row">
                        <div class="small-12 columns">
                            <p style="text-align: center;">COPYRIGHT &copy; 2023 COMPAROPERATOR.COM - TOUS DROITS RESERVES - MARQUES DEPOSEES<br />
                                R&eacute;servations assur&eacute;es par l&#39;agence de voyages ComparOpérator.com  - 3 rue de la Liberté - 75 003 PARIS<br />
                                Agence de voyages ouverte au public du lundi au vendredi de 10h &agrave; 18h - T&eacute;l. : 05 56 08 29 10<br />
                                Agence de voyages membre du r&eacute;seau Selectour - SIREN N&deg;000 000 000- Licence IM 000 00 0000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
          

    </div>
    </div>