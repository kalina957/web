import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { QuotesApiComponent } from './quotes-api.component';

describe('QuotesApiComponent', () => {
  let component: QuotesApiComponent;
  let fixture: ComponentFixture<QuotesApiComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QuotesApiComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QuotesApiComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
