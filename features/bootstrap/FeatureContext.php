<?php
# features/bootstrap/FeatureContext.php
 
require("add.php");
require("add-one.php");
 
use Behat\Behat\Context\BehatContext, 
    Behat\Behat\Exception\PendingException;
 
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
     
class FeatureContext extends BehatContext {

  private $a;
  private $b;
  private $res;
  
  /**
   * @Given /^I provide the number (\d+) and the number (\d+)$/
   */
  public function iProvideTheNumberAndTheNumber($a, $b) {
      $this->a = $a;
      $this->b = $b;
  }

  /**
   * @Given /^I provide the number (\d+)$/
   */
  public function iProvideTheNumber($a) {
      $this->a = $a;
  }

  /**
   * @When /^I add the numbers$/
   */
  public function iAddTheNumbers() {
    $Add = new Add();
    $this->res = $Add->add($this->a, $this->b);
  }

  /**
   * @When /^I add one to the number$/
   */
  public function iAddOneToTheNumber() {
    $AddOne = new AddOne();
    $this->res = $AddOne->addOne($this->a);
  }

  /** 
   * @Then /^I should get (\d+)$/ 
   */
  public function iShouldGet($exp) {
    if ($this->res != $exp) {
        throw new Exception("Actual result: ".$this->res);
    }
  }
}
?>