import { Department } from './departments/department'
import { Employee } from './employee'

export class Task {
    id: number;
    name: string;
    department_id: number;
    due_date: string;
    start_date: string;
    employees: number[];
    //description: String;
    startDate: string = "test";


    constructor(id: number, department_id: number, name: string, employees: number[], due_date: string,start_date:string) {
        var myDate = new Date();
        this.startDate = "test";
        //myDate.getFullYear() + "1" +  + "-" + (myDate.getMonth() + 1) + "-" + (myDate.getDate() + 3);
        //what is wronggg

        this.id = id;
        //this.department_id = department_id;
        this.name = name;
        this.department_id = department_id;
        this.employees = employees;
        this.due_date = "test" + due_date + "#" + this.startDate;//when it will be finished
        this.start_date= start_date;
    }

    public getStartDate(): string {
        return this.startDate;
    }
}

