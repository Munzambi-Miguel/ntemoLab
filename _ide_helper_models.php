<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\External\MINFIN{
/**
 * App\Models\External\MINFIN\ListaAgenteOU
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ListaAgenteOU newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ListaAgenteOU newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ListaAgenteOU query()
 * @mixin \Eloquent
 */
	class IdeHelperListaAgenteOU extends \Eloquent {}
}

namespace App\Models\External\PRIMAVERA{
/**
 * App\Models\External\PRIMAVERA\AgregadoFamiliar
 *
 * @property string $Funcionario
 * @property string $Nome
 * @property string|null $DataNasc
 * @property bool $Deficiente
 * @property bool|null $Estudante
 * @property int|null $TipoAfinidade
 * @property string|null $NumBI
 * @property string|null $DataValidadeBI
 * @property string $Agregado
 * @property bool $Activo
 * @property float|null $PercIncapacidade
 * @property bool|null $Mobilidade
 * @property int|null $NumPessoasDeConvivencia
 * @property bool|null $ConvivenciaExclusiva
 * @property string|null $NIF
 * @property string|null $EntidadePatronal
 * @property bool $AlargamentoAbFamilia
 * @property string|null $AnoEscolar
 * @property bool $AproveitamentoEscolar
 * @property bool|null $ComprovativoEstudo
 * @property string|null $Curso
 * @property string|null $DataValidadeADSE
 * @property bool $DependenciaTerceiraPessoa
 * @property string|null $EstabEnsino
 * @property int|null $GrauEnsino
 * @property string $idMembroAgregado
 * @property string|null $NumADSE
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar query()
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereActivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereAgregado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereAlargamentoAbFamilia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereAnoEscolar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereAproveitamentoEscolar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereComprovativoEstudo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereConvivenciaExclusiva($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereCurso($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereDataNasc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereDataValidadeADSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereDataValidadeBI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereDeficiente($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereDependenciaTerceiraPessoa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereEntidadePatronal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereEstabEnsino($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereEstudante($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereFuncionario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereGrauEnsino($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereIdMembroAgregado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereMobilidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereNIF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereNumADSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereNumBI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereNumPessoasDeConvivencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar wherePercIncapacidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgregadoFamiliar whereTipoAfinidade($value)
 * @mixin \Eloquent
 */
	class IdeHelperAgregadoFamiliar extends \Eloquent {}
}

namespace App\Models\External\PRIMAVERA{
/**
 * App\Models\External\PRIMAVERA\Concelho
 *
 * @property string $Concelho
 * @property string $Distrito
 * @property string $Descricao
 * @method static \Illuminate\Database\Eloquent\Builder|Concelho newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Concelho newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Concelho query()
 * @method static \Illuminate\Database\Eloquent\Builder|Concelho whereConcelho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concelho whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Concelho whereDistrito($value)
 * @mixin \Eloquent
 */
	class IdeHelperConcelho extends \Eloquent {}
}

namespace App\Models\External\PRIMAVERA{
/**
 * App\Models\External\PRIMAVERA\Departamento
 *
 * @property string $Departamento
 * @property string|null $Descricao
 * @property string|null $CblSalLiq
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\External\PRIMAVERA\Funcionario[] $funcionarios
 * @property-read int|null $funcionarios_count
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento query()
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento whereCblSalLiq($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento whereDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento whereDescricao($value)
 * @mixin \Eloquent
 */
	class IdeHelperDepartamento extends \Eloquent {}
}

namespace App\Models\External\PRIMAVERA{
/**
 * App\Models\External\PRIMAVERA\Estabelecimento
 *
 * @property string $Estabelecimento
 * @property string|null $Nome
 * @property string|null $Morada
 * @property string|null $Localidade
 * @property string|null $CodPostal1
 * @property string|null $CodPostal2
 * @property string|null $Distrito
 * @property string|null $CodDistrito
 * @property string|null $CodConcelho
 * @property string|null $CodFreguesia
 * @property string|null $CodIRC
 * @property string|null $Concelho
 * @property string|null $Freguesia
 * @property string|null $Telefone
 * @property string|null $IndTelefone
 * @property string|null $Fax
 * @property string|null $IndFax
 * @property int|null $NumEmpregados
 * @property string|null $RepFinancas
 * @property string|null $Contribuinte
 * @property string|null $CAE
 * @property string|null $CodCAE
 * @property string|null $SegSocial
 * @property string|null $NumSegSocial
 * @property string|null $CodigoCGA
 * @property string|null $NumCGA
 * @property string|null $NomeContactoSS
 * @property string|null $CargoContactoSS
 * @property string|null $TelfContactoSS
 * @property string|null $CodigoQP
 * @property string|null $CodEstabSS
 * @property bool $OrganizServicosSHST
 * @property int $ActividadeSegHigiene
 * @property int $ActividadeSaude
 * @property string|null $NomeContactoSHST
 * @property string|null $TelefonePrincContactoSHST
 * @property string|null $TelefoneAltContactoSHST
 * @property string|null $FaxContactoSHST
 * @property string|null $EmailContactoSHST
 * @property string|null $NomeMutua
 * @property string|null $EpigrafeMutua
 * @property string|null $ContaBancaria
 * @property string|null $SegHigieneTipoEntidade
 * @property string|null $SegHigieneEntidade
 * @property string|null $SaudeTipoEntidade
 * @property string|null $SaudeEntidade
 * @property string|null $EpigrafeIT
 * @property string|null $Epigrafe
 * @property int|null $Diploma
 * @property string|null $IDEstabelecimento
 * @property bool $Sede
 * @property string|null $PrimeiroNome
 * @property string|null $PrimeiroApelido
 * @property string|null $SegundoApelido
 * @property string|null $NIFContactoSS
 * @property string|null $Email
 * @property string|null $CalendarioTrabalho
 * @property bool $FeriasFeriados
 * @property string|null $Ministerio
 * @property string|null $Organismo
 * @property string $TipoLancamento
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\External\PRIMAVERA\Funcionario[] $funcionarios
 * @property-read int|null $funcionarios_count
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento query()
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereActividadeSaude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereActividadeSegHigiene($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCAE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCalendarioTrabalho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCargoContactoSS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodCAE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodConcelho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodDistrito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodEstabSS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodFreguesia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodIRC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodPostal1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodPostal2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodigoCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereCodigoQP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereConcelho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereContaBancaria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereContribuinte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereDiploma($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereDistrito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereEmailContactoSHST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereEpigrafe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereEpigrafeIT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereEpigrafeMutua($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereEstabelecimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereFaxContactoSHST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereFeriasFeriados($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereFreguesia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereIDEstabelecimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereIndFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereIndTelefone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereLocalidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereMinisterio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereMorada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereNIFContactoSS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereNomeContactoSHST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereNomeContactoSS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereNomeMutua($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereNumCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereNumEmpregados($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereNumSegSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereOrganismo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereOrganizServicosSHST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento wherePrimeiroApelido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento wherePrimeiroNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereRepFinancas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereSaudeEntidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereSaudeTipoEntidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereSede($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereSegHigieneEntidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereSegHigieneTipoEntidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereSegSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereSegundoApelido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereTelefone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereTelefoneAltContactoSHST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereTelefonePrincContactoSHST($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereTelfContactoSS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Estabelecimento whereTipoLancamento($value)
 * @mixin \Eloquent
 */
	class IdeHelperEstabelecimento extends \Eloquent {}
}

namespace App\Models\External\PRIMAVERA{
/**
 * Class Funcionario
 *
 * @package App\Models\External\PRIMAVERA
 * @property $Codigo string
 * @property $Nome string
 * @property string|null $Localidade
 * @property string|null $CodPostal1
 * @property string|null $CodPostal2
 * @property string|null $Naturalidade
 * @property string|null $Distrito
 * @property string|null $Nacionalidade
 * @property string|null $Telefone
 * @property string|null $EstadoCivil
 * @property string|null $Sexo
 * @property string|null $DataNascimento
 * @property string|null $DataAdmissao
 * @property string|null $DataReadmissao
 * @property string|null $DataFimContrato
 * @property string|null $Categoria
 * @property string|null $Profissao
 * @property string|null $Qualificacao
 * @property string|null $DataQualif
 * @property string|null $Habilitacao
 * @property int|null $TipoContrato
 * @property string|null $DataDemissao
 * @property string|null $DataPromocao
 * @property string|null $MotivoPromocao
 * @property float|null $HorasSemana
 * @property string|null $CodEstabelecimento
 * @property string|null $Situacao
 * @property string|null $SituacaoQP
 * @property string|null $NumBI
 * @property string|null $LocalEmBi
 * @property string|null $DataEmBi
 * @property string|null $CartaConducao
 * @property float|null $Vencimento
 * @property string|null $DataUltAumento
 * @property string|null $MotivoAumento
 * @property string|null $Notas
 * @property string|null $NumContr
 * @property string|null $CodRepFinancas
 * @property string|null $CodIRS
 * @property int|null $TotalDependentes
 * @property int|null $TotalDepDeficientes
 * @property bool $ConjugeDef
 * @property float|null $IRSFixo
 * @property string|null $NomeConjuge
 * @property string|null $CodSegSocial
 * @property string|null $NumBeneficiario
 * @property string|null $CodSindicato
 * @property string|null $NumSindicato
 * @property int|null $TipoProcessamento
 * @property string|null $DataUltProcessamento
 * @property string|null $DataSubsFerias
 * @property int|null $MesSubsFerias
 * @property string|null $DataSubsNatal
 * @property int|null $TurnosTaxa
 * @property int|null $TurnosDia
 * @property int|null $SubsAlim1
 * @property int|null $SubsAlim2
 * @property float|null $ValorSubsAlim
 * @property float|null $ValorSubsEsp
 * @property float|null $DiasSubsNatal
 * @property float|null $DiasSubsFerias
 * @property float|null $SalHora
 * @property float|null $HoraEntradaM
 * @property float|null $HoraSaidaM
 * @property float|null $HoraEntradaT
 * @property float|null $HoraSaidaT
 * @property string|null $Foto
 * @property string|null $DataInspMedica
 * @property string|null $DescricaoInspMedica
 * @property string|null $CodBancoEmpr
 * @property string|null $Morada
 * @property string|null $Email
 * @property string|null $Periodo
 * @property string|null $CodDepartamento
 * @property int|null $NumPeriodoProcessado
 * @property string|null $Instrumento
 * @property bool $SubsNatalProcessado
 * @property float|null $VencimentoMensal
 * @property float|null $DiuturnidadeMensal
 * @property float|null $Diuturnidades
 * @property bool $NumHorasSemInstrumentos
 * @property bool $PertenceOrgaosSoc
 * @property string|null $DataProximaDiuturnidade
 * @property string|null $Telemovel
 * @property float|null $LimiteContribuicoesSegSocial
 * @property string|null $CGA
 * @property string|null $NumCGA
 * @property string|null $NomeCGA
 * @property float|null $RegTmpPercAcresCGA
 * @property int|null $NumDiuturnidadesCGA
 * @property string|null $NivelRemCGA
 * @property string|null $RegTmpSituacaoCGA
 * @property float|null $RegTmpNumHorasCGA
 * @property string|null $UltimaProgressao
 * @property float|null $DiasSubsNatalJaPagos
 * @property string|null $TipoPessoal
 * @property int $UltimoAnoProcessado
 * @property int $DomicilioFiscal
 * @property string|null $Extensao
 * @property int $CodSituacaoQP
 * @property string|null $NomeAbreviado
 * @property string|null $Contrato
 * @property string|null $DataAvisoPrevio
 * @property int|null $PeriodoExp
 * @property string|null $MotivoSaida
 * @property string|null $DataValidadeCarta
 * @property string|null $DataValidadeBI
 * @property string|null $Concelho
 * @property string|null $Freguesia
 * @property string|null $DataIniProfissao
 * @property string|null $DataHabilitacao
 * @property string|null $CargoPrincipal
 * @property string|null $RegimeTrab
 * @property float|null $Altura
 * @property string|null $GrupoSanguineo
 * @property string|null $DeficienciasFisicas
 * @property string|null $OutrasDadosFisicos
 * @property string|null $DeficienciasCronicas
 * @property string|null $DoencasHereditarias
 * @property string|null $Cirurgias
 * @property string|null $NomeDistrito
 * @property string|null $NomeConcelho
 * @property string|null $IdGDOC
 * @property string|null $NomeFreguesia
 * @property int|null $VencimentoLiquidoEstimado
 * @property string $Moeda
 * @property string|null $EpigrafeAT
 * @property string|null $GrupoCotizacao
 * @property string|null $Bonificacao
 * @property string|null $IniciaisNomeSegSocial
 * @property float|null $PercIncapacidade
 * @property bool|null $MobilidadeReduzida
 * @property float|null $ReducaoIrregularidades
 * @property float|null $GastosDedutiveis
 * @property float|null $PensaoConjuge
 * @property float|null $PensaoFilhos
 * @property bool|null $MobilidadeGeografica
 * @property bool|null $ProlongacaoActLaboral
 * @property float|null $VencimentoDiario
 * @property int|null $TipoCalculoVencimento
 * @property bool|null $VencimentoConjSupLimite
 * @property string|null $NumPassaporte
 * @property string|null $LocalEmPassaporte
 * @property string|null $DataEmPassaporte
 * @property string|null $DataValidadePassaporte
 * @property string|null $NumIE
 * @property string|null $LocalEmIE
 * @property string|null $DataEmIE
 * @property string|null $DataValidadeIE
 * @property string|null $CodSeguro
 * @property string|null $DataInicioBonificacao
 * @property string|null $DataFimBonificacao
 * @property string|null $TipoRendimento
 * @property string|null $GrupoTraco
 * @property float $MinPessoalFamiliar
 * @property int $Regime
 * @property string|null $BaseCotizacao
 * @property string $CustoPadrao
 * @property bool $UtilizadoCCOP
 * @property int|null $RecursoCCOP
 * @property bool $Isento
 * @property string|null $PercVencParaSubsFerias
 * @property string|null $PercVencParaSubsNatal
 * @property bool|null $EmprestimoBancario
 * @property bool|null $EmprestimoBancarioAntesRegul
 * @property float $ValorAbateAntesRegul
 * @property float $RetribAnuaisIniciais
 * @property string|null $MotivoAdmissao
 * @property string|null $PrimeiroNome
 * @property string|null $PrimeiroApelido
 * @property string|null $SegundoApelido
 * @property string|null $ContribuinteNaoResidente
 * @property string|null $AplicabilidadeIRCT
 * @property int|null $CategoriaEscalao
 * @property int|null $MesSubsNatal
 * @property string|null $FormaPagSN
 * @property string|null $FormaPagSF
 * @property bool $ProcDiasAnterioresSN
 * @property bool $ProcDiasAnterioresSF
 * @property string|null $CodAlimDiasProc
 * @property string|null $CodAlimValorFixo
 * @property string|null $CodAlimEspecie
 * @property string|null $TabIRPS
 * @property bool $LigadoTimesheets
 * @property string|null $Pais
 * @property string|null $ADSE
 * @property bool|null $AguardarAposentacao
 * @property int|null $AnosFuncaoPublica
 * @property bool|null $ComprovativoGravidez
 * @property string|null $DataAposentacao
 * @property string|null $DataDespachoDR
 * @property string|null $DataGravidez
 * @property string|null $DataInicioAdmPub
 * @property string|null $DataInicioCategoria
 * @property string|null $DataInicioEscalao
 * @property string|null $DataValidadeADSE
 * @property string|null $DiarioRepublica
 * @property int|null $DiasFuncaoPublica
 * @property int|null $DiasNaCategoria
 * @property int|null $DiasNoEscalao
 * @property bool|null $DireitoSubsidioPreNatal
 * @property string|null $EducacaoFuncao
 * @property string|null $EducacaoSituacao
 * @property int|null $Escalao
 * @property bool|null $InactivoTemp
 * @property int|null $Indice
 * @property int|null $MesesFuncaoPublica
 * @property string|null $MotivoMC
 * @property string|null $NivelRemuneratorio
 * @property string|null $NumADSE
 * @property int|null $NumeroNaciturnos
 * @property float|null $PercentIndice100
 * @property string|null $ProcessoExecucao
 * @property string|null $RegimeIndice100
 * @property string|null $TabelaIrsAposentacao
 * @property int|null $TipoBalancoSocial
 * @property string|null $Utilizador
 * @property float|null $ValorDifPosicaoRemun
 * @property float|null $ValorMensalAposentacao
 * @property string|null $ModContratoCom
 * @property string|null $DataComunicacao
 * @property string|null $UtilizadorComunicacao
 * @property string|null $CartaoResidente
 * @property string|null $DataEmissaoCR
 * @property string|null $DataValidadeCR
 * @property string|null $LocalEmCR
 * @property int|null $TipoMoeda
 * @property string|null $IdentContrFundos
 * @property string|null $DataComFundos
 * @property string|null $DataCessaFundos
 * @property string|null $MotivoCessaFundos
 * @property string|null $DataComAltVencFundos
 * @property int|null $RegimeExRes
 * @property string|null $ModalidadeVinculacao
 * @property string|null $DataAdmissaoOrgVinc
 * @property string|null $DataCessacaoOrgVinc
 * @property string|null $OrgVinculo
 * @property string|null $OrgPagador
 * @property string|null $CodInvInt
 * @property string|null $NumBiDC
 * @property float|null $HorasVolIEESP
 * @property int $MedHorasVolIEESP
 * @property string|null $ExternoIEESP
 * @property string|null $CodInvNac
 * @property string|null $ProcedimentoAdmissaoContrato
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\External\PRIMAVERA\AgregadoFamiliar[] $agregado_familiar
 * @property-read int|null $agregado_familiar_count
 * @property-read \App\Models\External\PRIMAVERA\Departamento|null $departamento
 * @property-read \App\Models\External\PRIMAVERA\Distrito|null $distrito
 * @property-read \App\Models\External\PRIMAVERA\Estabelecimento|null $estabelecimento
 * @property-read \App\Models\External\PRIMAVERA\Habilitacao|null $habilitacao
 * @property-read \App\Models\External\PRIMAVERA\Pais|null $pais
 * @property-read \App\Models\External\PRIMAVERA\Profissao|null $profissao
 * @property-read \App\Models\External\PRIMAVERA\Situacao|null $situacao
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario query()
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereADSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereAguardarAposentacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereAltura($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereAnosFuncaoPublica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereAplicabilidadeIRCT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereBaseCotizacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereBonificacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCargoPrincipal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCartaConducao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCartaoResidente($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCategoriaEscalao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCirurgias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodAlimDiasProc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodAlimEspecie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodAlimValorFixo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodBancoEmpr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodDepartamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodEstabelecimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodIRS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodInvInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodInvNac($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodPostal1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodPostal2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodRepFinancas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodSegSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodSeguro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodSindicato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodSituacaoQP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCodigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereComprovativoGravidez($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereConcelho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereConjugeDef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereContribuinteNaoResidente($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereCustoPadrao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataAdmissao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataAdmissaoOrgVinc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataAposentacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataAvisoPrevio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataCessaFundos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataCessacaoOrgVinc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataComAltVencFundos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataComFundos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataComunicacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataDemissao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataDespachoDR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataEmBi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataEmIE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataEmPassaporte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataEmissaoCR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataFimBonificacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataFimContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataGravidez($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataHabilitacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataIniProfissao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataInicioAdmPub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataInicioBonificacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataInicioCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataInicioEscalao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataInspMedica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataNascimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataPromocao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataProximaDiuturnidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataQualif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataReadmissao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataSubsFerias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataSubsNatal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataUltAumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataUltProcessamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataValidadeADSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataValidadeBI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataValidadeCR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataValidadeCarta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataValidadeIE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDataValidadePassaporte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDeficienciasCronicas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDeficienciasFisicas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDescricaoInspMedica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiarioRepublica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiasFuncaoPublica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiasNaCategoria($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiasNoEscalao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiasSubsFerias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiasSubsNatal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiasSubsNatalJaPagos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDireitoSubsidioPreNatal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDistrito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiuturnidadeMensal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDiuturnidades($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDoencasHereditarias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereDomicilioFiscal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereEducacaoFuncao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereEducacaoSituacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereEmprestimoBancario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereEmprestimoBancarioAntesRegul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereEpigrafeAT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereEscalao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereEstadoCivil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereExtensao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereExternoIEESP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereFormaPagSF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereFormaPagSN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereFoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereFreguesia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereGastosDedutiveis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereGrupoCotizacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereGrupoSanguineo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereGrupoTraco($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereHabilitacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereHoraEntradaM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereHoraEntradaT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereHoraSaidaM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereHoraSaidaT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereHorasSemana($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereHorasVolIEESP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereIRSFixo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereIdGDOC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereIdentContrFundos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereInactivoTemp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereIndice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereIniciaisNomeSegSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereInstrumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereIsento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereLigadoTimesheets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereLimiteContribuicoesSegSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereLocalEmBi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereLocalEmCR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereLocalEmIE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereLocalEmPassaporte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereLocalidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMedHorasVolIEESP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMesSubsFerias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMesSubsNatal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMesesFuncaoPublica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMinPessoalFamiliar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMobilidadeGeografica($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMobilidadeReduzida($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereModContratoCom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereModalidadeVinculacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMoeda($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMorada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMotivoAdmissao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMotivoAumento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMotivoCessaFundos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMotivoMC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMotivoPromocao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereMotivoSaida($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNacionalidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNaturalidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNivelRemCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNivelRemuneratorio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNomeAbreviado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNomeCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNomeConcelho($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNomeConjuge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNomeDistrito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNomeFreguesia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNotas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumADSE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumBI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumBeneficiario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumBiDC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumContr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumDiuturnidadesCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumHorasSemInstrumentos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumIE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumPassaporte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumPeriodoProcessado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumSindicato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereNumeroNaciturnos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereOrgPagador($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereOrgVinculo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereOutrasDadosFisicos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePensaoConjuge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePensaoFilhos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePercIncapacidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePercVencParaSubsFerias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePercVencParaSubsNatal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePercentIndice100($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePeriodo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePeriodoExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePertenceOrgaosSoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePrimeiroApelido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario wherePrimeiroNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereProcDiasAnterioresSF($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereProcDiasAnterioresSN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereProcedimentoAdmissaoContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereProcessoExecucao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereProfissao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereProlongacaoActLaboral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereQualificacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRecursoCCOP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereReducaoIrregularidades($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRegTmpNumHorasCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRegTmpPercAcresCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRegTmpSituacaoCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRegime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRegimeExRes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRegimeIndice100($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRegimeTrab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereRetribAnuaisIniciais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereSalHora($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereSegundoApelido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereSexo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereSituacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereSituacaoQP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereSubsAlim1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereSubsAlim2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereSubsNatalProcessado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTabIRPS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTabelaIrsAposentacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTelefone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTelemovel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTipoBalancoSocial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTipoCalculoVencimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTipoContrato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTipoMoeda($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTipoPessoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTipoProcessamento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTipoRendimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTotalDepDeficientes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTotalDependentes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTurnosDia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereTurnosTaxa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereUltimaProgressao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereUltimoAnoProcessado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereUtilizadoCCOP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereUtilizador($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereUtilizadorComunicacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereValorAbateAntesRegul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereValorDifPosicaoRemun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereValorMensalAposentacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereValorSubsAlim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereValorSubsEsp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereVencimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereVencimentoConjSupLimite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereVencimentoDiario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereVencimentoLiquidoEstimado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Funcionario whereVencimentoMensal($value)
 * @mixin \Eloquent
 */
	class IdeHelperFuncionario extends \Eloquent {}
}

namespace App\Models\External\PRIMAVERA{
/**
 * App\Models\External\PRIMAVERA\Habilitacao
 *
 * @property string $Habilitacao
 * @property string|null $Descricao
 * @property int|null $PosBS
 * @property string|null $CodigoQP
 * @property string|null $NivelUE
 * @property int $TipoBalancoSocial
 * @property string|null $NivelIEESP
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\External\PRIMAVERA\Funcionario[] $funcionarios
 * @property-read int|null $funcionarios_count
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao query()
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao whereCodigoQP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao whereHabilitacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao whereNivelIEESP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao whereNivelUE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao wherePosBS($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Habilitacao whereTipoBalancoSocial($value)
 * @mixin \Eloquent
 */
	class IdeHelperHabilitacao extends \Eloquent {}
}

namespace App\Models\External\PRIMAVERA{
/**
 * App\Models\External\PRIMAVERA\Profissao
 *
 * @property string $Profissao
 * @property string|null $Descricao
 * @property string|null $CodigoQP
 * @property bool|null $Activo
 * @property string|null $Observacoes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\External\PRIMAVERA\Funcionario[] $funcionarios
 * @property-read int|null $funcionarios_count
 * @method static \Illuminate\Database\Eloquent\Builder|Profissao newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profissao newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profissao query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profissao whereActivo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profissao whereCodigoQP($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profissao whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profissao whereObservacoes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profissao whereProfissao($value)
 * @mixin \Eloquent
 */
	class IdeHelperProfissao extends \Eloquent {}
}

namespace App\Models\External\PRIMAVERA{
/**
 * App\Models\External\PRIMAVERA\Situacao
 *
 * @property string $Situacao
 * @property string|null $Descricao
 * @property int|null $Tipo
 * @property string|null $SituacaoCGA
 * @property string|null $Falta
 * @property int|null $TipoSituacao
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\External\PRIMAVERA\Funcionario[] $funcionarios
 * @property-read int|null $funcionarios_count
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao query()
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao whereDescricao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao whereFalta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao whereSituacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao whereSituacaoCGA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Situacao whereTipoSituacao($value)
 * @mixin \Eloquent
 */
	class IdeHelperSituacao extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Roles
 *
 * @mixin IdeHelperRoles
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Roles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles query()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereUpdatedAt($value)
 */
	class IdeHelperRoles extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @mixin IdeHelperUser
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property bool|null $esta_verificado
 * @property string|null $avatar
 * @property string $objectguid
 * @property-read mixed $avatar_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User isSuperAdmin()
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEstaVerificado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereObjectguid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class IdeHelperUser extends \Eloquent {}
}

