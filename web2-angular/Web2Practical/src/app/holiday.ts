export class Holiday {

    name: string;
    description: string; 
    datetime: Date;
    type: string[]; 
    locations: string; 
    states: string;

    constructor(name: string, description: string, datetime: Date, type: string[], locations: string, states: string){
        this.name = name;
        this.description = description;
        this.datetime = datetime;
        this.type = type;
        this.locations = locations;
        this.states = states;
    }
}
