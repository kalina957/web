import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ExtDepartmentsComponent } from './ext-departments.component';

describe('ExtDepartmentsComponent', () => {
  let component: ExtDepartmentsComponent;
  let fixture: ComponentFixture<ExtDepartmentsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ExtDepartmentsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ExtDepartmentsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
