import { Model, DataTypes } from 'sequelize';

const table_name = 'service_calls';

const callSchema = {
    callID: {
        type: DataTypes.INTEGER,
        primaryKey: true,
        allowNull: true,
    },
    subject: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    customer: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    custmrName: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    contctCode: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    manufSN: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    internalSN: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    contractID: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    cntrctDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    resolDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    resolTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    free_1: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    free_2: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    origin: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    itemCode: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    itemName: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    itemGroup: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    status: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    priority: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    callType: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    problemTyp: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    assignee: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    descrption: {
        type: DataTypes.STRING('MAX'),
        allowNull: true,
    },
    objType: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    logInstanc: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    userSign: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    createDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    createTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    closeDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    closeTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    userSign2: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    updateDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    SCL1Count: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    SCL2Count: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    isEntitled: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    insID: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    technician: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    resolution: {
        type: DataTypes.STRING('MAX'),
        allowNull: true,
    },
    Scl1NxtLn: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Scl2NxtLn: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    Scl3NxtLn: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    Scl4NxtLn: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Scl5NxtLn: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    isQueue: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Queue: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    resolOnDat: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    resolOnTim: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    respByDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    respByTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    respOnDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    respOnTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    respAssign: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    AssignDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    AssignTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    UpdateTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    responder: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    Transfered: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Instance: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    DocNum: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    Series: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    Handwrtten: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    PIndicator: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    StartDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    StartTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    EndDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    EndTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    Duration: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    DurType: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Reminder: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    RemQty: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    RemType: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    RemDate: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    RemSent: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    RemTime: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    Location: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    AddrName: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    AddrType: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Street: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    City: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Room: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    State: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Country: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    DisplInCal: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    SupplCode: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Attachment: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    AtcEntry: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    NumAtCard: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    ProSubType: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPType: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Telephone: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPPhone1: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPPhone2: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPCellular: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPFax: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPShipCode: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPShipAddr: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPBillCode: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPBillAddr: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPTerrit: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPE_Mail: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPProjCode: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    BPContact: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    OwnerCode: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    DPPStatus: {
        type: DataTypes.STRING,
        allowNull: true,
        defaultValue: 'N',
    },
    EncryptIV: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    Printed: {
        type: DataTypes.STRING,
        allowNull: true,
        defaultValue: 'N',
    },
    DataVers: {
        type: DataTypes.INTEGER,
        allowNull: true,
        defaultValue: 1,
    },
    U_DK_NUM_FACT: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_F_COMP: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    U_DK_Modelo: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_Marca: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_TIPO_ACT: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_ST_ACT: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_FALLA: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_F_ENVIO_CDD: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    U_DK_F_CULM_TEC: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    U_DK_F_ENV_TDA: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    U_DK_F_ENT_CLI: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    U_DK_TIENDA: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_F_DIAGN: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    U_DK_F_NOT_CLI: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    U_DK_QUEJA: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_DIAS_GEST: {
        type: DataTypes.INTEGER,
        allowNull: true,
    },
    U_DK_CallType: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DK_ORIGEN: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_RMA1: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_RMA2: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_DUPLICADO: {
        type: DataTypes.STRING,
        allowNull: true,
        defaultValue: '2',
    },
    U_TEC_Asignado: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_F_ENVIO_CDD: {
        type: DataTypes.DATE,
        allowNull: true,
    },
    U_BM_NUMDOC: {
        type: DataTypes.STRING,
        allowNull: true,
    },
    U_BM_SUCDEST: {
        type: DataTypes.STRING,
        allowNull: true,
    },
};
class Call extends Model {
    static associate() { }

    static config(sequelize) {
        return {
            sequelize,
            tableName: table_name,
            modelName: 'ServiceCalls',
            timestamps: false,
        };
    }
}

export { table_name, callSchema, Call };